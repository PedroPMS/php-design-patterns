<?php

use RealCase\IMDBGenresScrapingCommand;
use RealCase\Queue;

require_once("Command.php");
require_once("WebScrapingCommand.php");
require_once("Queue.php");
require_once("IMDBGenresScrapingCommand.php");
require_once("IMDBGenrePageScrapingCommand.php");

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand());
}

$queue->work();
