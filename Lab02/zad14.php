<?php
// Zad 2.12

require_once __DIR__ . "/vendor/autoload.php";
use Ramsey\Uuid\Uuid;

class Dog
{
    private string $id;
    private string $name;
    private int $age;
    private string $admissionDate;

    public function __construct(string $name, int $age, string $admissionDate)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->name = $name;
        $this->age = $age;
        $this->admissionDate = $admissionDate;
    }

    public function displayInfo(): void
    {
        echo "Dog ID: {$this->id}, Name: {$this->name}, Age: {$this->age}, Admission Date: {$this->admissionDate}\n";
    }
}

// Tworzenie 5 przykładowych psów
$dogs = [
    new Dog("Buddy", 3, "2023-02-15"),
    new Dog("Charlie", 2, "2022-11-30"),
    new Dog("Max", 4, "2023-01-10"),
    new Dog("Lucy", 5, "2022-09-22"),
    new Dog("Daisy", 1, "2023-03-01"),
];

// Wyświetlanie informacji o psach
foreach ($dogs as $dog) {
    $dog->displayInfo();
}

