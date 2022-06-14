<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;
use function cli\line;
use function cli\prompt;

class Progression extends Engine
{
    function main(): bool

    {
        $this->welcome();
        $this->setname();

        line('What is the result of the expression?');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
            $lengthProgression = rand(5, 10);
            $positionMissing = rand(1, $lengthProgression);
            $firstNumber = rand(0, 100);
            $intervalProgression = rand(0, 10);
            $j = 1;
            echo 'Question: ';
            while ($j != $lengthProgression + 1) {
                if ($j == $positionMissing) {
                    echo '..';
                    $correctAnswer = $firstNumber;
                } else {
                    echo $firstNumber;
                }
                echo ' ';
                $firstNumber += $intervalProgression;
                $j++;
            }
            echo PHP_EOL;
            $answer = prompt('Your answer');
            if ($answer == $correctAnswer) {
                line('Correct!');
            } else {
                line("'($answer)' is wrong answer ;(. Correct answer was '($correctAnswer)'.");
                $this->gameOver();
                return false;
            }

        }
        $this->congratulations();
        return true;
    }
}
