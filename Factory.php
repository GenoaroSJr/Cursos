<?php

//** defino a interface para as contas */
interface Conta
{
    public function getContaName(): String;
    public function getTaxaJuros(): String;
}


/** as contas implementadas */
class Bradesco implements Conta
{
    private $CONTA_NAME;
    private $TAXA_JUROS;

    public function __construct(String $contaNameDefine, String $taxaJuros)
    {
        $this->CONTA_NAME = $contaNameDefine;
        $this->TAXA_JUROS = $taxaJuros;
    }

    public function getContaName(): String
    {
        return "Bradesco " . $this->CONTA_NAME . PHP_EOL;
    }

    public function getTaxaJuros(): String
    {
        return "Itau juros: " . $this->TAXA_JUROS . PHP_EOL;
    }
}

class Itau implements Conta
{
    private $CONTA_NAME;
    private $TAXA_JUROS;

    public function __construct(String $contaNameDefine, String $taxaJuros)
    {
        $this->CONTA_NAME = $contaNameDefine;
        $this->TAXA_JUROS = $taxaJuros;
    }

    public function getContaName(): String
    {
        return "Itau " . $this->CONTA_NAME . PHP_EOL;
    }

    public function getTaxaJuros(): String
    {
        return "Itau juros: " . $this->TAXA_JUROS . PHP_EOL;
    }
}

/** aplicação da Factory Pattern */
abstract class BancoFactory
{
    abstract public function ContaBanco(String $contaName): Conta;
}

class ItauFactory extends BancoFactory
{
    private $TAXA_JUROS = "0.2";
    public function ContaBanco($contaName): Conta
    {
        return new Itau($contaName, $this->TAXA_JUROS);
    }
}

class ItauFactoryEstudante extends BancoFactory
{
    private $TAXA_JUROS = "0.1";
    public function ContaBanco($contaName): Conta
    {
        return new Itau($contaName, $this->TAXA_JUROS);
    }
}

class BradescoFactoryEstudante extends BancoFactory
{
    private $TAXA_JUROS = "0.1";
    public function ContaBanco($contaName): Conta
    {
        return new Itau($contaName, $this->TAXA_JUROS);
    }
}

/** Aplicação da Strategy Pattern */
class ContextTipoConta
{
    private $CONTA;
    private $CONTA_NAME;
    public function __construct(BancoFactory $tipoConta, String $contaName)
    {
        $this->CONTA = $tipoConta;
        $this->CONTA_NAME = $contaName;
    }

    public function getContaName(): String
    {
        return $this->CONTA->ContaBanco($this->CONTA_NAME)->getContaName();
    }

    public function getTaxaJuros(): String
    {
        return $this->CONTA->ContaBanco($this->CONTA_NAME)->getTaxaJuros();
    }
}

/** Client Side Code */
$contaBradesco = new ContextTipoConta(new ItauFactoryEstudante, "Genoaro");
echo ($contaBradesco->getContaName());
echo ($contaBradesco->getTaxaJuros());

$contaBradesco = new ContextTipoConta(new ItauFactory, "Genoaro Não Estudante");
echo ($contaBradesco->getContaName());
echo ($contaBradesco->getTaxaJuros());
