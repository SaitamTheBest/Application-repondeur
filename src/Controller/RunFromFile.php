<?php

namespace Ohce\Controller;

use Ohce\Model\AnsweringMachine;
use Ohce\Model\Greetings;

class RunFromFile implements Run
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function run(Greetings $greeting, AnsweringMachine $answeringMachine): void
    {
        echo $greeting->sayHello() . "\n";

        if (!file_exists($this->fileName)) {
            echo "Le fichier " . $this->fileName . " n'existe pas.\n";
            return;
        }

        $file = fopen($this->fileName, 'r');
        if ($file) {
            while (($word = fgets($file)) !== false) {
                echo $answeringMachine->inverse(trim($word)) . "\n";
            }
            fclose($file);
        } else {
            echo "Impossible de lire le fichier " . $this->fileName . ".\n";
        }

        echo $greeting->sayAdios() . "\n";
    }
}
