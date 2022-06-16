<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Prime extends Engine
{
    function inPrime($num): bool
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
        $this->welcome();
        $this->setname();

        line('Answer "yes" if the number is even, otherwise answer "no".');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
            $digit = rand(0, 50);
            line("Question: $digit");

            if ($this->inPrime($digit)) {
                $correctAnswer = 'yes';
            } else {
                $correctAnswer = 'no';
            }
            $answer = prompt('Your answer');
            if ($this->inPrime($digit) && $answer === $correctAnswer || !$this->inPrime($digit) && $answer === $correctAnswer) {
                line('Correct!');
            } else {
                line("($answer) is wrong answer ;(. Correct answer was ($correctAnswer).");
                $this->gameOver();
                return false;
            }
        }
        $this->congratulations();
        return true;
    }


}
