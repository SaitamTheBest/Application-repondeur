<?php

namespace Ohce\Controller;

use Ohce\Model\AnsweringMachine;
use Ohce\Model\Greetings;

class RunFromCli implements Run
{

    public function run(Greetings $greeting, AnsweringMachine $answeringMachine): void
    {
        echo $greeting->sayHello() . "\n";

        while (true) {
            $input = readline("> ");

            if (strtolower(trim($input)) === 'stop!') {
                echo $greeting->sayAdios() . "\n";
                break;
            }

            $response = $answeringMachine->inverse($input);

            echo $response . "\n";
        }
    }
}