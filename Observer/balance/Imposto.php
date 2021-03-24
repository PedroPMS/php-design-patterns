<?php


class Imposto implements SplSubject
{
    private $observadores;
    public $taxaAtual = 0.5;

    public function __construct()
    {
        $this->observadores = new SplObjectStorage();
    }

    public function setTaxaAtual($taxaAtual)
    {
        $this->taxaAtual = $taxaAtual;
        $this->notify();
    }

    public function getTaxaAtual()
    {
        return $this->taxaAtual;
    }

    public function attach(SplObserver $observer)
    {
        $this->observadores->attach($observer);
        $this->notify();
    }

    public function detach(SplObserver $observer)
    {
        $this->observadores->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observadores as $observador) {
            $observador->update($this);
        }
    }
}