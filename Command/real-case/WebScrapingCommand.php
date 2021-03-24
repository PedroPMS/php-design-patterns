<?php

namespace RealCase;

abstract class WebScrapingCommand implements Command
{
    public int $id;
    public int $status = 0;
    public string $url;

    public function __construct(string$url)
    {
        $this->url = $url;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function execute(): void
    {
        $html = $this->download();
        $this->parse($html);
        $this->complete();
    }

    public function download(): string
    {
        $html = file_get_contents($this->getUrl());
        echo "WebScrapingCommand: Downloaded {$this->url}".PHP_EOL;
        return $html;
    }

    abstract public function parse(string $html): void;

    public function complete(): void
    {
        $this->status = 1;
        Queue::get()->completeCommand($this);
    }
}