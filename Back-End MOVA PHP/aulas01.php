<?php
//Comentário em uma linha

/* Comentário em
várias linhas*/

echo "Ola Mundo\n";

/*não há necessidade de declarar uma variável no php
basta apenas usar $nome_variável = atribuição;*/

$idade = 21;
echo $idade;

//os operadores aritméticos são os padrões;
$idade = 21;
$idade = $idade + 20;
echo "\n$idade\n";
echo 2**2; //elevando ao quadrado;

//tipo de variáveis
// . usado para concatenação;
//int, double, string, boolean <- típos primitios;

$float = 3.0; // não é necessário tipificar a variável;

echo "\n" . gettype($idade) . "\n"; 
echo "\n" . gettype($float);
echo "\n" . gettype("ola");

//tipo string

echo "\n".'\nola mundo, minha idade é $idade'; // não funciona
echo "\nola mundo, minha idade é $idade"; // funciona
echo "\n".'\nola mundo, minha idade é '.$idade; // funciona

//qual "comando" dentro de ' ' não irá funcionar;
// \t -> eecuta um tab ... pesquisar "php string", ver lista de caracterres;

//caracter especial php apra quebra de linha PHP_EOF; end of line;
echo PHP_EOL . "quebra de linha " . PHP_EOL;





?>