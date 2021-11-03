<?php

require_once "src/titular.php";
//aqui é criado a "forma";
class Conta
{
    //definir os dados da Conta ou da Classe;
    private ?Titular $titular;
    private static $numeroDeContas = 0;
    private float $saldo;

    //construtor;
    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;
        Self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
        echo PHP_EOL."Destruído";
    }
    
    public function sacar(float $valorASacar) : void
    {
        if($valorASacar > $this->saldo)   {
            echo PHP_EOL."Valor indisponível";
            return;
        }
        $this->saldo-=$valorASacar;
        echo PHP_EOL."Valor de R$ $valorASacar retirado com sucesso!";
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 50.0){
            echo PHP_EOL."O depósito mínimo é de R$100,00!";
            return;
        }
        $this->saldo += $valorADepositar;
        echo PHP_EOL."Valor de R$ $valorADepositar depositado com sucesso!";
        
    }
    
    public function transferir(float $valorTransferencia, Conta $contaReceber) : void
    {
        if($valorTransferencia > $this->saldo){
            echo PHP_EOL."Saldo insulficiente para transaçao";
            return;
        }  
        $this->sacar($valorTransferencia);
        $contaReceber->depositar($valorTransferencia);
        echo PHP_EOL."Valor transferido com sucesso!";
        
    }

    
    
    //getter e setter
    //getters
    public static function getNumeroDeContas(): int { return Self::$numeroDeContas; }

    public function getSaldo(): float { return $this->saldo; }

    public function getCpf(): string { return $this->titular->getCpf(); }


    //setters
    /*
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
        echo PHP_EOL."Nome alterado com sucesso!";
        return;

    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
        echo PHP_EOL."CPF alterado com sucesso";
        return;
    }
    */

}

// código main;

