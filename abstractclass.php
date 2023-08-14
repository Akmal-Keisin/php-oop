<?php

abstract class Location
{
  protected string $name;

  public abstract function __construct($name);
  public abstract function sayHello(): string;
}

class Jogja extends Location
{
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function sayHello(): string
  {
    return "Hello " . $this->name;
  }
}

class Semarang extends Location
{
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function sayHello(): string
  {
    return "Hello " . $this->name;
  }
}

class Jakarta extends Location
{
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function sayHello(): string
  {
    return "Hello " . $this->name;
  }
}
