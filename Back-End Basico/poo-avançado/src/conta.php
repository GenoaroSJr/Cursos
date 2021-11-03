<?php

class Conta
{
    private $titular;
    private float $saldo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 1000.0;
        echo "Conta Inicializada com sucesso!!";
    }

    public function __destruct()
    {
        echo PHP_EOL."Conta excluida com sucesso!";
    }

    //define getters ans setters
    public function getSaldo(): float    
    {
        return $this->saldo;
    }
}