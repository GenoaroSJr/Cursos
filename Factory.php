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
    private $NOME_USER;
    private $TAXA_JUROS;

    public function __construct(String $defineNomeUser, String $taxaJuros)
    {
        $this->NOME_USER = $defineNomeUser;
        $this->TAXA_JUROS = $taxaJuros;
    }

    public function getContaName(): String
    {
        return "Bradesco " . $this->NOME_USER . PHP_EOL;
    }

    public function getTaxaJuros(): String
    {
        return "Bradesco juros: " . $this->TAXA_JUROS . PHP_EOL;
    }
}

class Itau implements Conta
{
    private $NOME_USER;
    private $TAXA_JUROS;

    public function __construct(String $defineNomeUser, String $taxaJuros)
    {
        $this->NOME_USER = $defineNomeUser;
        $this->TAXA_JUROS = $taxaJuros;
    }

    public function getContaName(): String
    {
        return "Itau " . $this->NOME_USER . PHP_EOL;
    }

    public function getTaxaJuros(): String
    {
        return "Itau juros: " . $this->TAXA_JUROS . PHP_EOL;
    }
}

/** aplicação da Factory Pattern */
abstract class BancoFactory
{
    /** É sobre o construtor da class Conta
     * por exemplo, a class conta recebe $userName; 
     */

    abstract public function ContaBanco(String $userName): Conta;
}

class ItauFactory extends BancoFactory
{
    private $TAXA_JUROS = "0.2";
    public function ContaBanco($userName): Conta
    {
        return new Itau($userName, $this->TAXA_JUROS);
    }
}

class ItauFactoryEstudante extends BancoFactory
{
    private $TAXA_JUROS = "0.1";
    public function ContaBanco($userName): Conta
    {
        return new Itau($userName, $this->TAXA_JUROS);
    }
}

class BradescoFactoryEstudante extends BancoFactory
{
    private $TAXA_JUROS = "0.15";
    public function ContaBanco($userName): Conta
    {
        return new Bradesco($userName, $this->TAXA_JUROS);
    }
}

/** Aplicação da Strategy Pattern */
class ContextTipoConta
{
    private $TIPO_CONTA;
    private $NOME_USER;
    public function __construct(BancoFactory $tipoConta, String $userName)
    {
        $this->TIPO_CONTA = $tipoConta;
        $this->NOME_USER = $userName;
    }

    public function getContaName(): String
    {
        return $this->TIPO_CONTA->ContaBanco($this->NOME_USER)->getContaName();
    }

    public function getTaxaJuros(): String
    {
        return $this->TIPO_CONTA->ContaBanco($this->NOME_USER)->getTaxaJuros();
    }
}

/** Client Side Code */
$contaBradesco = new ContextTipoConta(new ItauFactoryEstudante, "Genoaro");
echo ($contaBradesco->getContaName());
echo ($contaBradesco->getTaxaJuros());

$contaBradesco = new ContextTipoConta(new ItauFactory, "Genoaro");
echo ($contaBradesco->getContaName());
echo ($contaBradesco->getTaxaJuros());

$contaBradesco = new ContextTipoConta(new BradescoFactoryEstudante, "Genoaro");
echo ($contaBradesco->getContaName());
echo ($contaBradesco->getTaxaJuros());
