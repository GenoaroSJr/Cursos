<?php

$banco = [
   '0' => ["titular" => "Genoaro S Jr 0", "conta" => "2019000475"],
   '1' => ["titular" => "Genoaro S Jr 1", "conta" => "2019000476"],
   '2' => ["titular" => "Genoaro S Jr 2", "conta" => "2019000477"],
];

foreach($banco as $usuario => $conta){
    ['titular' => $titular, 'conta' => $conta] = $conta;
    echo 'Titular: '.$titular. " Conta: ".$conta . PHP_EOL;
}

unset($banco['0']);
echo PHP_EOL;
foreach($banco as $usuario => $conta){
    ['titular' => $titular, 'conta' => $conta] = $conta;
    echo 'Titular: '.$titular. " Conta: ".$conta . PHP_EOL;
}