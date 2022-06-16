<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function main(): bool
{
    $randMandatory = array('*', '-', '+');
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    line('What is the result of the expression?');
    for ($i = 0; $i < 3; $i++) {
        $digit = rand(0, 100);
        $digit2 = rand(0, 100);
        $random = rand(0, 2);
        $rand = $randMandatory[$random];
        line("Question: $digit $rand $digit2");
        $answer = prompt('Your answer');
        $correctAnswer = calculate($digit, $digit2, $rand);
        if ($answer == $correctAnswer) {
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

function calculate(int $num1, int $num2, string $symbol)
{
    switch ($symbol) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        default:
            return $num1 * $num2;
    }
}
