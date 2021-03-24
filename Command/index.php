<?php

require_once("Command.php");
require_once("Invoker.php");
require_once("Receiver.php");
require_once("SimpleCommand.php");
require_once("ComplexCommand.php");

$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand('Olá Mundo!'));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, 'Enviando email', 'Salvando logs'));

$invoker->doSomethingImportant();