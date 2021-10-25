<?php
// comentário

/*
~"Desafio" dos números impares: 
imprima da tela os números primos até 100, em valor em cada linh
*/
Echo "Desafio Um: Números Impares" . PHP_EOL;
$x=0;
while ($x<100) {
    if (($x%2)!=0) {
        echo $x . PHP_EOL;
    }
    $x++;
}

echo "Desafio Dois: Tabuada x9" . PHP_EOL;
$x=0;
while($x<10){
    echo $x*9 . " ";
    $x++;
}

echo "Desafio Três: IMC" . PHP_EOL;
echo "Entre com o peso: "; $peso=fgets(STDIN); 
echo "Entre com a altura: "; $altura=fgets(STDIN);
echo "IMC: "; echo $IMC = $peso/(pow($altura,2));
echo PHP_EOL;
if($IMC <= 18.5){
    echo "Abaixo do peso";
}else if($IMC>18.5 && $IMC<25){
    echo "Peso normal";
}else if($IMC>24.9 && $IMC<30){
    echo "Sobrepeso";
}else if($IMC>29 && $IMC<35){
    echo "Obesidade I";
}else if($IMC>29.9 && $IMC<40){
    echo "Obesidade II";
}else if($IMC>39.9){
    echo "Mórbida";
}
