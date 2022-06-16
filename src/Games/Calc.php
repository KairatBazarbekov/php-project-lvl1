<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Calc extends Engine
{
    public function main(): bool
    {
        $this->welcome();
        $this->setName();
        $randMandatory = array('*', '-', '+');
        line('What is the result of the expression?');
        for ($i = 0; $i < $this->getTryCount(); $i++) {
            $digit = rand(0, 100);
            $digit2 = rand(0, 100);
            $random = rand(0, 2);
            $rand = $randMandatory[$random];
            line("Question: $digit $rand $digit2");
            $answer = prompt('Your answer');
            $correctAnswer = $this->calculate($digit, $digit2, $rand);
            if ($answer == $correctAnswer) {
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

    public function calculate($num1, $num2, $symbol)
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
}
