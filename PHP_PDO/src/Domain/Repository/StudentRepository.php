<?php

namespace Alura\Pdo\Domain\Repository;

// isso aqui fuciona como os protótipos do C;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsBirthDateAt(DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}