<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

class Engine
{
    public string $name;
    private int $tryCount = 3;


    public function welcome()
    {
        line('Welcome to the Brain Games!');
    }

    public function setName()
    {
        $this->name = prompt('May I have your name?');
        line("Hello, $this->name!");
    }

    public function congratulations()
    {
        line("Congratulations, $this->name!");
    }

    public function gameOver()
    {
        line("Let's try again, $this->name!");
    }

    public function getTryCount():int {
        return $this->tryCount;
    }

    public function setTryCount($tryCount) {
        $this->tryCount = $tryCount;
    }
}