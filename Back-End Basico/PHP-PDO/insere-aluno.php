<?php

use src\Domain\Model\Student;
require_once 'vendor/autoload.php';

$databasePath = __DIR__ . 'banco.sqlite';
$pdo = new PDO('sqlite:'.$databasePath);

$student = new Student(null, 'GenoaroSJr', DataTimeImmutable('1997-01-22'));

//$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('y-m-d')}';";