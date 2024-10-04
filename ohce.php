<?php

use Ohce\Controller\RunFromCli;
use Ohce\Controller\RunFromFile;
use Ohce\Model\AnsweringMachine;
use Ohce\Model\Greetings;
use Ohce\Ohce;

require_once "vendor/autoload.php";

if ($argc < 2) {
    echo "usage: php ohce.php <username> [file]\n";
    exit(1);
}

$username = $argv[1];
$greeting = new Greetings(new DateTimeImmutable('now'), $username);
$answeringMachine = new AnsweringMachine();

if ($argc === 2) {
    $runner = new RunFromCli();
} elseif ($argc === 3) {
    $fileName = $argv[2];
    $runner = new RunFromFile($fileName);
}

$runner->run($greeting, $answeringMachine);
exit(0);
