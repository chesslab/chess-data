<?php

namespace ChessData\Cli\Mine;

require_once __DIR__ . '/../../vendor/autoload.php';

use Chess\SanHeuristic;
use Chess\Function\FastFunction;
use ChessData\Pdo;
use Dotenv\Dotenv;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

class Heuristics extends CLI
{
    protected $pdo;

    protected $table = 'games';

    protected FastFunction $fastFunction;

    public function __construct()
    {
        parent::__construct(true);

        $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();

        $conf = include(__DIR__ . '/../../config/database.php');

        $this->pdo = Pdo::getInstance($conf);
        $this->fastFunction = new FastFunction();
    }

    protected function setup(Options $options)
    {
        $options->setHelp('Apply analytics to mine for heuristics insights.');
        $options->registerArgument('player', 'The name of the player.', true);
    }

    protected function main(Options $options)
    {
        $values = [
            [
                'param' => ":player",
                'value' => $options->getArgs()[0],
                'type' => \PDO::PARAM_STR,
            ],
        ];

        $sql = "SELECT * FROM games WHERE White = :player OR Black = :player";

        $rows = $this->pdo->query($sql, $values)->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            $value = [];

            foreach ($this->fastFunction->names() as $name) {
                $value[] = (new SanHeuristic(
                    $this->fastFunction,
                    $name,
                    $row['movetext']
                ))->getBalance();
            }

            $sql = "UPDATE {$this->table} SET heuristics_mine = :heuristics_mine WHERE movetext = :movetext";

            $values = [
                [
                    'param' => ':heuristics_mine',
                    'value' => json_encode($value, true),
                    'type' => \PDO::PARAM_STR,
                ],
                [
                    'param' => ':movetext',
                    'value' => $row['movetext'],
                    'type' => \PDO::PARAM_STR,
                ],
            ];

            try {
                $this->pdo->query($sql, $values);
            } catch (\Exception $e) {}
        }
    }
}

$cli = new Heuristics();
$cli->run();
