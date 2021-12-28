<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once '../vendor/autoload.php';
/*
1) Faz a conexão com o banco de dados;
2) Depois define como será a estrutura de dados salva no banco;
3) Faz a query do sqlite;
*/ 
$pdo = ConnectionCreator::createConnection();

$student = new Student
(
    null, 
    "Vinicius', ''); DROP TABLE students; --Dias", 
    new \DateTimeImmutable('1997-10-15')
);

//os valores inseridos aqui será obtidos da estrutura definida em $student;
//$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

//------------------------ PRIMEIRA FORMA ------------------------
//tratando os dados antes de inserir;
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?);";
//pede pra prepara os dados  do $sqlInsert;
$statement = $pdo->prepare($sqlInsert);
//define o que vai entrar em cada um dos lugares ? do sqlInsert;
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

/*

//------------------------ SEGUNDA FORMA ------------------------
//                       prepare statament
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
//pede pra prepara os dados  do $sqlInsert;
$statement = $pdo->prepare($sqlInsert);
//define o que vai entrar em cada um dos lugares ? do sqlInsert;
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

//------------------------ DOCUMENTAÇÃO ------------------------
//bindValue => passa o valor da variável;
//bindParam => passa o endereço da variável;

var_dump($statement->execute());

//var_dump($pdo -> exec($sqlInsert));

//segurança

*/