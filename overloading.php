<?php

namespace Overloading;

class Zero
{
  private $properties = [];

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    $this->properties[$name] = $value;
  }

  public function __isset($name)
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $joinArgument = join(',', $arguments);
    echo "call to fnuction $name with argument $joinArgument" . PHP_EOL;
  }

  static function __callStatic($name, $arguments)
  {
    $joinArgument = join(',', $arguments);
    echo "call to static fnuction $name with argument $joinArgument" . PHP_EOL;
  }
}
