<?php
class Product
{
  private string $name;
  private int $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName()
  {
    echo $this->name . PHP_EOL;
    return $this->name;
  }
  public function getPrice()
  {
    echo $this->price . PHP_EOL;
    return $this->price;
  }
}
