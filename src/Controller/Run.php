<?php

namespace Ohce\Controller;

use Ohce\Model\AnsweringMachine;
use Ohce\Model\Greetings;

interface Run
{
    public function run(Greetings $greeting, AnsweringMachine $answeringMachine);
}