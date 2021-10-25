<?php

//include 'funcoe.php'; //quando não é necessário para o funcionamento do programa;
require 'funcoe.php'; //quando é necessário para o funcionamento do programa;
require_once 'funcoe.php'; //inclue SE não foi incluido ainda;

echo imprimir("Ola mundo!");

/*tratamento de erro
níveis de erro
1. E_WARNING; continua exeutando, mas não consegue fazer o que foi pedido;
2. E_NOTICE; encontra um erro, mas consegue se virar;
3. E_ERROR; deu problema total, o php não consegue continuar;
*/