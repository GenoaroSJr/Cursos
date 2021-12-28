<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once '../vendor/autoload.php';

/*
1) Faz a conexão com o banco de dados;
2) Define a query que será enviado para o banco;
3) Puxa os dados do banco com o tipo de style desejado;
4) Depois define como será a estrutura de dados salva no banco;
4) & salva os dados na memória para serem apresentados;

obs: o fetchAll() é uma forma de buscar no PHP todos os 
dados do banco;

obs2: dentro do fetchAll() é possível alterar o estilo da busca, ou
o como os dados serão retornados.
modos de retorno : 
https://www.php.net/manual/en/pdostatement.fetchall

*/ 
//1)
$pdo = ConnectionCreator::createConnection();

//2)
$searchAlunos = "SELECT * FROM students;";

//3)
//busca uma linha de dados;
$statement = $pdo->query($searchAlunos);
$studentDataList = $statement->fetch(PDO::FETCH_ASSOC);
$studentList = [];


//mais comum para muitos dados; usado quando precisa do where também.
//aqui ele vai substituindo na memória o que está sendo puxada no banco;
//quando não existe mais linhas, ele ele volta 'false' e interrompe o while.
while($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
    $student = new Student(
        $studentData['id'],
        $studentData['name'],
        new DataTimeImmutable($studentData['birth_date'])
    );
    echo $student;
}exit();

/*

//mais comum para poucos dados;
//forma de ir buscando os dados dos Alunos e ir acumulando na memória:
foreach($studentDataList as $studentData){
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);

*/