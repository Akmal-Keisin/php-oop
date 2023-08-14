<?php

namespace MagicFunction;

class Student
{
  public int $id;
  public string $name;
  public int $age;

  public function __toString(): string
  {
    return "Student Id : $this->id , Name : $this->name, Age : $this->age";
  }

  public function __invoke(...$argument): void
  {
    $join = join(',', $argument);
    echo $join;
  }

  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "age" => $this->age,
      "info" => "DEBUG INFO"
    ];
  }
}
