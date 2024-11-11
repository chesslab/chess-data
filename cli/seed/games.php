<?php

namespace ChessData\Cli\Seed;

require_once __DIR__ . '/../../vendor/autoload.php';

use ChessData\PdoCli;

class Games extends PdoCli
{
    protected string $table = 'games';
}

$cli = new Games();
$cli->run();
