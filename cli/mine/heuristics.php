<?php

namespace ChessData\Cli\Mine;

require_once __DIR__ . '/../../vendor/autoload.php';

use Chess\FenHeuristics;
use Chess\Function\FastFunction;
use Chess\Movetext\SanMovetext;
use Chess\Variant\Classical\Board;
use Chess\Variant\Classical\PGN\Move;
use ChessData\Pdo;
use Dotenv\Dotenv;
use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;

class Heuristics extends CLI
{
    protected Pdo $pdo;

    protected string $table = 'games';

    protected FastFunction $function;

    public function __construct()
    {
        parent::__construct();

        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $conf = include(__DIR__ . '/../../config/database.php');

        $this->pdo = Pdo::getInstance($conf);
        $this->function = new FastFunction();
    }

    protected function setup(Options $options)
    {
        $options->setHelp('Extract heuristics analytics from chess positions in FEN format.');
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

        $move = new Move();

        foreach ($rows as $row) {
            $heuristics = [];
            $board = new Board();

            foreach ((new SanMovetext($move, $row['movetext']))->moves as $val) {
                $board->play($board->turn, $val);
                $heuristics[] = (new FenHeuristics($this->function, $board))->getBalance();
            }

            $sql = "UPDATE {$this->table} SET heuristics_mine = :heuristics_mine WHERE movetext = :movetext";

            $values = [
                [
                    'param' => ':heuristics_mine',
                    'value' => json_encode($heuristics, true),
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
            } catch (\Exception $e) {
            }
        }
    }
}

$cli = new Heuristics();
$cli->run();
