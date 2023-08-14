<?php

// namespace Covariance;
require_once "covariancecontravariancefood.php";

abstract class Animal
{
  public string $name;
  abstract public function run();
  abstract public function eat(AnimalFood $animalfood): void;
}

class Dog extends Animal
{
  public function run()
  {
    echo "Dog $this->name is running";
  }

  public function eat(AnimalFood $animalFood): void
  {
    echo "Dog Eating";
  }
}
class Cat extends Animal
{
  public function run()
  {
    echo "Cat $this->name is running";
  }

  public function eat(Food $food): void
  {
    echo "Cat eating";
  }
}
