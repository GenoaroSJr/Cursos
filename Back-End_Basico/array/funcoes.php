<?php

/* Testando retorno de array e função como parâmetro de operação;
$valores = [1,2,3,4];

function multiplica(array $valores) : array {
    $valores_multiplo = [];
    foreach($valores as $valor){
        $valores_multiplo[] = $valor*2;
    }
    return $valores_multiplo;
}
foreach(multiplica($valores) as $valores){
    echo $valores . " ";
}

exit();
 */

$contas = [
    '0' => ["nome" => null, "brl" => null],
];

foreach($contas as $banco => $usuario){
    echo "Conta: " . $banco . " Nome: " . $usuario["nome"] . " BRL: " . $usuario["brl"];  
}

$contas[1] = ["nome" => "Genoaro", "brl" => 1000.0];

foreach($contas as $banco => $usuario){
    echo PHP_EOL;
    echo "Conta: " . $banco . " Nome: " . $usuario["nome"] . " BRL: " . $usuario["brl"];  
}

//funções:
function exibirUsuario($contas,$id_usuario)
{
    foreach($contas as $user => $info)
    {
        $status = $user == $id_usuario ? true : false;
        //echo "Status: ".$status;
    
    } echo $status ? PHP_EOL." Usuário não encontrado" : PHP_EOL."Usuário encontrado";
}
exibirUsuario($contas,0); 

/*
Comentário:
É possível inserir funções no operador ternário do IF.

exibirUsuario($contas,0);

function um($valor){
    echo PHP_EOL.$valor;
}

function dois($valor){
    echo PHP_EOL.$valor;
}


$status = 1;
$status == true ? dois(2) : um(1);
*/