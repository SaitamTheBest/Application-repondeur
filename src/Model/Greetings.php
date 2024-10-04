<?php

namespace Ohce\Model;

class Greetings
{
    private $time;
    private $name;

    public function __construct(\DateTimeImmutable $time, $name)
    {
        $this->time = $time;
        $this->name = $name;
    }

    public function sayHello()
    {
        $hour = $this->time->format('H');
        if ($hour >= 6 && $hour <= 12  )
        {
            return '¡Buenos días ' . $this->name . '!';
        }

        if ($hour >= 12 && $hour <= 20  )
        {
            return '¡Buenas tardes ' . $this->name . '!';
        }
        return '¡Buenas noches ' . $this->name . '!';
    }

    public function sayAdios()
    {
        return 'Adios ' . $this->name . '.';
    }

}