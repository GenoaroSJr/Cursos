<?php
$idade = 21;
echo "Só poderá entrar se tiver maisde 18 anos\n";
echo " ... \n";
if($idade>18){
    echo "Ok, você poderá entrar";
}else{
    echo "Você não poderá entrar";
}

if($idade>18 || $idade==18 && $idade>=18){
    echo "\nEsse curso é fraco de mais";
}

?>