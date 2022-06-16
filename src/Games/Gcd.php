<?php

namespace Src\Games\Gcd;

use function cli\line;
use function cli\prompt;

     function main(): bool
    {
        line('Welcome to the Brain Games!');
        $name = prompt('May I have your name?');
        line("Hello, $name!");
        line('What is the result of the expression?');
        for ($i = 0; $i < 3; $i++) {
            $digit = rand(1, 100);
            $digit2 = rand(1, 100);
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
                line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
                line("Let's try again, $name!");
                return false;
            }
        }
        line("Congratulations, $name!");
        return true;
    }
