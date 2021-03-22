<?php

class Funcionario implements SplObserver
{
    private $nome;
    private $salario = 5000;
    private $salarioLiquido;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalarioLiquido()
    {
        return $this->salarioLiquido;
    }

    public function setSalarioLiquido($taxa)
    {
        $this->salarioLiquido = $this->salario - $this->salario * $taxa;
    }

    public function update(SplSubject $subject)
    {
        $this->setSalarioLiquido($subject->getTaxaAtual());
    }
}