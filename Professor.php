<?php

class Professor implements SplObserver
{
    protected $tipo = 'Professor';
    private $nome;
    private $endereco;
    private $telefone;
    private $email;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function update(SplSubject $subject)
    {
        $subject->setLog("Vindo de ". $this->nome. ": dou aula de ". $subject->getMateria());
    }
}