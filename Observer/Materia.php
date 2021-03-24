<?php

class Materia implements SplSubject
{
    private $nomeMateria;
    private $observadores;
    private $log = [];

    public function getMateria()
    {
        return $this->nomeMateria;
    }

    public function setLog($valor)
    {
        $this->log[] = $valor;
    }

    public function getLog()
    {
        return $this->log;
    }

    public function __construct($nome)
    {
        $this->nomeMateria = $nome;
        $this->observadores = new SplObjectStorage();
        $this->log[] = "Materia $nome foi incluida com sucesso";
    }

    public function attach(SplObserver $observer)
    {
        $this->observadores->attach($observer);
        $this->log[] = "O " . $observer->getTipo() . " " . $observer->getNome() . " foi adicionado";
    }

    public function detach(SplObserver $observer)
    {
        $this->observadores->detach($observer);
        $this->log[] = "O " . $observer->getTipo() . " " . $observer->getNome() . " foi removido";
    }

    public function notify()
    {
        foreach ($this->observadores as $observador) {
            $observador->update($this);
        }
    }
}
