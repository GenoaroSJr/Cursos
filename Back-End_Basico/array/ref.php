<?php

//passando por referencia

$valor = 5;
//ele irá alterar o valor original, estou passando o endereço de memória;
function aumenta(&$valor)
{
    echo $valor=$valor+10;
    
}

//Não irá alterar o valor original, apenas paresentar o soma com a "cópia"
function aumenta_dois($valor)
{
    echo $valor=$valor+10;
    
}
aumenta_dois($valor);
echo " ".$valor;

