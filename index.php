<?php

require_once("Negocio.php");
require_once("Materia.php");
require_once("Professor.php");
require_once("Aluno.php");

$negocio = new Negocio();
$negocio->__invoke();
