<?php

$banco = [
   '0' => ["titular" => "Genoaro S Jr 0", "conta" => "2019000475"],
   '1' => ["titular" => "Genoaro S Jr 1", "conta" => "2019000476"],
   '2' => ["titular" => "Genoaro S Jr 2", "conta" => "2019000477"],
];

//formas de pegar os valores de um array para variaveis separadas;
foreach($banco as $registro => $usuario) {
    ["titular" => $titular, "conta" => $conta] = $usuario;
    echo $registro . ": " . $titular . " " . $conta. PHP_EOL;
}
