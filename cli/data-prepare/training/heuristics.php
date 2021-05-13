<?php

namespace ChessData\Cli\DataPrepare\Training;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Dotenv\Dotenv;
use Chess\Heuristic\Picture\Positional as PositionalHeuristicPicture;
use Chess\ML\Supervised\Regression\OptimalLinearCombinationLabeller;
use Chess\PGN\Symbol;
use ChessData\Pdo;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

class DataPrepareCli extends CLI
{
    const DATA_FOLDER = __DIR__.'/../../../dataset/training';

    protected function setup(Options $options)
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../../');
        $dotenv->load();

        $options->setHelp('Creates a prepared CSV dataset of heuristics in the dataset/training folder.');
        $options->registerArgument('n', 'A random number of games to be queried.', true);
        $options->registerArgument('player', "The chess player's full name.", true);
        $options->registerOption('win', 'The player wins.');
        $options->registerOption('lose', 'The player loses.');
        $options->registerOption('draw', 'Draw.');
    }

    protected function main(Options $options)
    {
        if ($options->getOpt('win')) {
            $result = '0-1';
        } elseif ($options->getOpt('lose')) {
            $result = '1-0';
        } else {
            $result = '1/2-1/2';
        }

        $opt = key($options->getOpt());
        $filename = "{$this->snakeCase($options->getArgs()[1])}_{$opt}.csv";

        $sql = "SELECT * FROM games WHERE Black SOUNDS LIKE '{$options->getArgs()[1]}'
            AND result = '$result'
            ORDER BY RAND()
            LIMIT {$options->getArgs()[0]}";

        $games = Pdo::getInstance()
                    ->query($sql)
                    ->fetchAll(\PDO::FETCH_ASSOC);

        $fp = fopen(self::DATA_FOLDER."/$filename", 'w');

        foreach ($games as $game) {
            try {
                $heuristicPicture = new PositionalHeuristicPicture($game['movetext']);
                $taken = $heuristicPicture->take();
                foreach ($taken[Symbol::WHITE] as $key => $item) {
                    $sample = [
                        Symbol::WHITE => $taken[Symbol::WHITE][$key],
                        Symbol::BLACK => $taken[Symbol::BLACK][$key],
                    ];
                    $label = (new OptimalLinearCombinationLabeller($heuristicPicture, $sample))->label();
                    $row = array_merge(
                        $taken[Symbol::BLACK][$key],
                        [$label[Symbol::BLACK]]
                    );
                    fputcsv($fp, $row, ';');
                }
            } catch (\Exception $e) {}
        }

        fclose($fp);
    }

    protected function snakeCase(string $string)
    {
        return str_replace(' ', '_', strtolower(trim($string)));
    }
}

$cli = new DataPrepareCli();
$cli->run();
