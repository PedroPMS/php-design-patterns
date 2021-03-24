<?php


class Receiver
{
    public function doSomething(string $a)
    {
        echo 'Receiver: Trabalhando em ('.$a.')'.PHP_EOL;
    }

    public function doSomethingElse(string $b)
    {
        echo 'Receiver: Trabalhando também em ('.$b.')'.PHP_EOL;
    }
}