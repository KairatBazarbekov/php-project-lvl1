<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Even extends Engine
{
    function main(): bool

    {
        $this->welcome();
        $this->setname();

        line('Answer "yes" if the number is even, otherwise answer "no".');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
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
                line("{$answer} is wrong answer ;(. Correct answer was {$correctAnswer}.");
                $this->gameOver();
                return false;
            }
        }
        $this->congratulations();
        return true;
    }
}