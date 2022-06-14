<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;
use function cli\line;
use function cli\prompt;

class Gcd extends Engine
{
    function main(): bool

    {
        $this->welcome();
        $this->setname();

        line('What is the result of the expression?');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
            $digit = rand(0, 100);
            $digit2 = rand(0, 100);

            line("Question: $digit $digit2");
            $answer = prompt('Your answer');
            $correctAnswer = gmp_gcd($digit, $digit2);
            if ($answer == $correctAnswer) {
                line('Correct!');
            } else {
                line("$answer is wrong answer ;(. Correct answer was $correctAnswer.");
                $this->gameOver();
                return false;
            }
        }
        $this->congratulations();
        return true;
    }

}
