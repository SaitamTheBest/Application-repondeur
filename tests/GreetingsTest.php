<?php

namespace Test;

use Ohce\Model\Greetings;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

// Pour lancer les tests:
// ./vendor/bin/phpunit tests/ --testdox

class GreetingsTest extends TestCase
{
    #[Test]
    public function should_return_buenas_noches_madeline_between_20h_and_6h()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 00:00:00');
        $greetings = new Greetings($time, 'Madeline');

        // ACT
        $hello = $greetings->sayHello();

        // ASSERT
        self::assertThat($hello, self::identicalTo('¡Buenas noches Madeline!'));
    }

    #[Test]
    public function should_return_buenos_dias_madeline_between_6h_and_12h()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 09:00:00');
        $greetings = new Greetings($time,'Madeline');

        // ACT
        $hello = $greetings->sayHello();

        // ASSERT
        self::assertThat($hello, self::identicalTo('¡Buenos días Madeline!'));
    }
    #[Test]
    public function should_return_buenas_tardes_madeline_between_12h_and_20h()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 15:00:00');
        $greetings = new Greetings($time,'Madeline');

        // ACT
        $hello = $greetings->sayHello();

        // ASSERT
        self::assertThat($hello, self::identicalTo('¡Buenas tardes Madeline!'));
    }
    #[Test]
    public function should_return_buenas_noches_prosper_between_20h_and_6h()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 04:00:00');
        $greetings = new Greetings($time,'Prosper');

        // ACT
        $hello = $greetings->sayHello();

        // ASSERT
        self::assertThat($hello, self::identicalTo('¡Buenas noches Prosper!'));
    }
    #[Test]
    public function should_return_buenos_dias_prosper_between_6h_and_12h()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 09:00:00');
        $greetings = new Greetings($time,'Prosper');

        // ACT
        $hello = $greetings->sayHello();

        // ASSERT
        self::assertThat($hello, self::identicalTo('¡Buenos días Prosper!'));
    }
    #[Test]
    public function should_say_adios_madeline()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 15:00:00');
        $greetings = new Greetings($time,'Madeline');

        // ACT
        $adios = $greetings->sayAdios();

        // ASSERT
        self::assertThat($adios, self::identicalTo('Adios Madeline.'));
    }

    #[Test]
    public function should_say_adios_prosper()
    {
        // ARRANGE
        $time = new \DateTimeImmutable('2024-09-27 15:00:00');
        $greetings = new Greetings($time,'Prosper');

        // ACT
        $adios = $greetings->sayAdios();

        // ASSERT
        self::assertThat($adios, self::identicalTo('Adios Prosper.'));
    }
}
