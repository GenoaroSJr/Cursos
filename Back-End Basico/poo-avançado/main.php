<?php

require_once "src/conta.php";
require_once "src/titular.php";

$contaGenoaro = new Conta(new Titular("GenoaroSJr", 2019000475));
echo PHP_EOL."Saldo atual: R$".$contaGenoaro->getSaldo();

//var_dump($contaGenoaro);
