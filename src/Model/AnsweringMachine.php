<?php

namespace Ohce\Model;

class AnsweringMachine
{
    function inverse($input)
    {
        $palindrome = strrev($input);
        if ($input == "ressasser")
        {
            $palindrome .= "\n¡Bonita palabra!";
        }

        return $palindrome;
    }
}