<?php

class Titular
{
    private ?string $nome = null;
    private ?string $cpf = null;

    public function __contruct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->nome = $cpf;

        $this->validarNome($nome); 
    }

    private function validarNome(string $nome): void
    {
            if(strlen($nome)>5){
                echo PHP_EOL."Nome valido";
                return;
            }
            echo PHP_EOL."Nome inválido!";
    }

    public function getCpf() { return $this->cpf; }

    public function getNome() { return $this->nome; }

}