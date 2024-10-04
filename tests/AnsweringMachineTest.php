<?php

namespace Test;

use Ohce\Model\AnsweringMachine;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class AnsweringMachineTest extends TestCase
{
    #[Test]
    public function should_return_aloh_to_hola()
    {
        // ARRANGE
        $input = 'aloh';
        $answeringMachine = new AnsweringMachine();

        // ACT
        $result = $answeringMachine->inverse($input);

        // ASSERT
        self::assertEquals('hola', $result);
    }
    #[Test]
    public function should_return_girafe_to_efarig()
    {
        // ARRANGE
        $input = 'girafe';
        $answeringMachine = new AnsweringMachine();

        // ACT
        $result = $answeringMachine->inverse($input);

        // ASSERT
        self::assertEquals('efarig', $result);
    }
    #[Test]
    public function should_return_ressasser_and_bonita_palabra_to_ressasser()
    {
        // ARRANGE
        $input = "ressasser";
        $answeringMachine = new AnsweringMachine();

        // ACT
        $result = $answeringMachine->inverse($input);

        // ASSERT
        self::assertEquals("ressasser\n¡Bonita palabra!", $result);
    }

}
