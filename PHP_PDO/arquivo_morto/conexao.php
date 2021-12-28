<?php
/*
PDO -> interface para o acesso aos diversos bancos de dados no PHP;

se o arquivo banco.sqlite não existe, ele será criado;
*/

$caminhoBanco = __DIR__ . '../../banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo "Conectado!";

/*
1) Cria a query;
2) Executa a query com o comando exec;

Obs: nesse ponto ele está criando as tabelas do banco.
*/
$sqlQuery = 'CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);';
//$pdo->exec($sqlQuery);
