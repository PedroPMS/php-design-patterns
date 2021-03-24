<?php


class ComplexCommand implements Command
{
    private Receiver $receiver;
    private string $a;
    private string $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): void
    {
        echo 'ComplexCommand: Coisas complexas dever ser feitar num objeto Receiver'.PHP_EOL;
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}