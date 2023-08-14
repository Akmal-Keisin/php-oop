<?php
interface AnimalShelter
{
  function adopt(string $name): Animal;
}


class CatShelter implements AnimalShelter
{
  public function adopt(string $name): Cat // instead of returning class type Animal, it can return class type Cat
  {
    $cat = new Cat();
    $cat->name = $name;
    return $cat;
  }
}

class DogShelter implements AnimalShelter
{
  public function adopt(string $name): Dog // instead of returning class type Animal, it can return class type Dog
  {
    $dog = new Dog();
    $dog->name = $name;
    return $dog;
  }
}
