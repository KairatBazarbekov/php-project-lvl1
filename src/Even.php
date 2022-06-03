<?php
namespace Src\Even;

use function cli\line;
use function cli\prompt;

function main()

{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $digit = rand(0, 100);
        line("Question: $digit");
        $answer = prompt('Your answer');
        $correctAnswer = 'unknown';
        if ($digit % 2 === 0 && $answer === 'yes') {
            line('Correct!');
        } else if ($digit % 2 != 0 && $answer === 'no') {
            line('Correct!');
        } else {
            if ($digit % 2 === 0) {
                $correctAnswer = 'yes';
            } else if ($digit % 2 != 0) {
                $correctAnswer = 'no';
            }
            line("$answer is wrong answer ;(. Correct answer was $correctAnswer.");
            line("Let's try again, $name!");
            return false;
        }
    }
    line("Congratulations, $name");
}