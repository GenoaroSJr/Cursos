<?php
require_once "src/conta.php";
require_once "src/titular.php";


echo "main";
$contaUm = new Conta( new Titular("GenoaroSJr","111.111.111.11"));
//$contaUm->setNome("GenoaroSJr");
//$contaUm->setCpf("111.111.111.11");
$contaUm->depositar(2000.00);
echo PHP_EOL;

$contaDois = new Conta(new Titular("GenoaroSJr2","222.222.222.22"));
//$contaDois->setNome("SoaresJr.");
//$contaDois->setCpf("222.222.222.22");
echo PHP_EOL;
$contaDois->depositar(4000.00);

$contaDois->getCpf();

$contaUm->transferir(500.00, $contaDois);

echo PHP_EOL."Agorao banco possui ".Conta::getNumeroDeContas()." contas existentes";




//var_dump($umaNovaConta);