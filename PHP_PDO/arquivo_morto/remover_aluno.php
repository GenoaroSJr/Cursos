<?php

use Alura\Pdo\Domain\Model\Student;

require_once '../vendor/autoload.php';
/*
1) Faz a conexão com o banco de dados;
2) Faz a query do sqlite;
*/ 
$databasePath = __DIR__ . '../../banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$deleteStudent = 'DELETE FROM students WHERE id = ?;';
$preparedStatement = $pdo->prepare($deleteStudent);
$preparedStatement->bindValue(1,4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

//o statement pode ser executado duas vezes;
$preparedStatement->bindValue(1,4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());