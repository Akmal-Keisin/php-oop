<?php

class Login
{
  public string $name;
  public string $password;
}

class Validate
{
  static function validateRequest($request)
  {
    $reflection = new ReflectionClass($request);
    $propreties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($propreties as $property) {
      if (!$property->isInitialized()) {
        throw new Exception("$property->name Is Not Set");
      } else if (is_null($property->getValue())) {
        throw new Exception("$property->name Is Null");
      }
    }
  }
}

$request = new Login();
Validate::validateRequest($request);
