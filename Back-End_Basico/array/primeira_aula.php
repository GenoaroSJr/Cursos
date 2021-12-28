<?php

//array ou vetor
$lista = [21,20,31];
echo $lista[0] . PHP_EOL;

$lista_dois = array(12,02,13);
echo $lista_dois[0] . PHP_EOL;
foreach($lista as $value){
    echo $value . " ";
}
echo PHP_EOL;
foreach($lista_dois as $value){
    echo $value . " ";
} echo PHP_EOL;

//array associativo
$contas = [
    ['titular' => 'Genoaro S. Jr.', 'conta' => '2019000475', 'ano' => '2019'],
    ['titular' => 'Genoaro S. Jr.', 'conta' => '2019000476', 'ano' => '2020'],
    ['titular' => 'Genoaro S. Jr.', 'conta' => '2019000477', 'ano' => '2021']
];

echo "Qual ano deseja consultar? "; $ano=fgets(STDIN); 

foreach($contas as $valor){
    if($valor['ano'] == $ano){
        echo "Titular: " . $valor['titular'];
        echo " Conta: " . $valor['conta'];
        echo " ano: " . $valor['ano'];
    }
} echo PHP_EOL;

//adicionando itens ao array;
/* se não for informado, o php irá adicionar no última indice */
$contas[] = ['titular' => 'Genoaro S. Jr.', 'conta' => '2019000478', 'ano' => '2022'];
foreach($contas as $valor){
    echo "Titular: " . $valor['titular'];
    echo " Conta: " . $valor['conta'];
    echo " ano: " . $valor['ano'];
    echo PHP_EOL;
} echo PHP_EOL;

/* em casso específicos, faz sentido formatar a chave */
$cpf = [
    '123.456.789-00' => ['nome' => 'Genoaro S. Jr.'],
    '123.456.789-01' => ['nome' => 'Genoaro S. Jr.']
]; 
$cpf['123.456.789-02'] = [
    'nome' => 'Genoaro S. Jr.'
];
foreach($cpf as $cpff => $pessoa){
    echo $cpff . " " . $pessoa['nome'];
    echo PHP_EOL;
}
