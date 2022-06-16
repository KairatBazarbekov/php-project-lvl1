<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;
use function cli\line;
use function cli\prompt;

class Gcd extends Engine
{
    public function main(): bool
    {
        $this->welcome();
        $this->setname();

        line('What is the result of the expression?');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
            $digit = rand(0, 100);
            $digit2 = rand(0, 100);
            $divisors1 = [];
            $divisors2 = [];
            for ($j = 1; $j <= $digit; $j++) {
                if ($digit % $j == 0) {
                    $divisors1[] = $j;
                }
            }
            for ($k = 1; $k <= $digit2; $k++) {
                if ($digit2 % $k == 0) {
                    $divisors2[] = $k;
                }
            }
            $correctAnswer = max(array_intersect($divisors1, $divisors2));
            line("Question: $digit $digit2");
            $answer = prompt('Your answer');
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

