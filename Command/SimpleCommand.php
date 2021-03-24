<?php


class SimpleCommand implements Command
{
    private string $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo 'SimpleCommand: Veja, eu posso fazer coisas simples como printar('.$this->payload.')'.PHP_EOL;
    }
}