<?php


class Invoker
{
    private Command $onStart;
    private Command $onFinish;

    public function setOnStart(Command $onStart): void
    {
        $this->onStart = $onStart;
    }

    public function setOnFinish(Command $onFinish): void
    {
        $this->onFinish = $onFinish;
    }

    public function doSomethingImportant(): void
    {
        echo 'Invoker: Alguém precisa de algo antes de eu começar?'.PHP_EOL;
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        echo 'Invoker: ...fazendo algo muito importante...'.PHP_EOL;

        echo 'Invoker: Alguém precisa de algo antes que eu termine?'.PHP_EOL;
        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }
    }
}