<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function inPrime(int $num): bool
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function main(): bool
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $digit = rand(2, 50);
        line("Question: $digit");

        if (inPrime($digit)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $answer = prompt('Your answer');
        if (inPrime($digit) && $answer === $correctAnswer || !inPrime($digit) && $answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("($answer) is wrong answer ;(. Correct answer was ($correctAnswer).");
            line("Let's try again, $name!");
            return false;
        }
    }
    line("Congratulations, $name!");
    return true;
}
