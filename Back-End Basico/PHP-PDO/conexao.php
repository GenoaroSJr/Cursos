<?php

//__DIR__ pega o diretório atual. 
$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'.$caminhoBanco);

echo "Conectado!";

//comando para executar um slq;
$pdo->exec(statement: 'CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT)');

//se o arquivo banco.sqlite não existir, assim que executar o código, 
//um arquivo será criado. 
