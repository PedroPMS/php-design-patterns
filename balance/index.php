<?php
require_once("Imposto.php");
require_once("Funcionario.php");

$imposto = new Imposto();
$funcionario = new Funcionario('Pedro');
$imposto->attach($funcionario);

echo 'Pedro <br>';
echo '<pre>';
echo 'Salário: R$ ' . $funcionario->getSalario();
echo '<br>';
echo 'Salário Líquido: R$' . $funcionario->getSalarioLiquido();
echo '<pre>';
echo '<hr>';

echo '<br>';
echo '<hr>';
$imposto->setTaxaAtual(0.1);
echo 'Imposto mudou para 10%';
echo '<hr>';
echo '<br>';

echo 'Pedro <br>';
echo '<pre>';
echo 'Salário: R$ ' . $funcionario->getSalario();
echo '<br>';
echo 'Salário Líquido: R$' . $funcionario->getSalarioLiquido();
echo '<pre>';
echo '<hr>';