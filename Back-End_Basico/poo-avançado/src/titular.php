<?php

class Titular
{
    private string $nome;
    private int $numeroConta;

    public function __construct(string $nome, string $numeroConta)      
    {
        $this->nome = $nome;
        $this->numeroConta = $numeroConta;
    }

    //define getters and setters
}