<?php

class Programer
{
  public string $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgramer extends Programer
{
}

class FrontendProgramer extends Programer
{
}

class Company
{
  public Programer $programer;
}

function sayHelloProgramer(Programer $programer)
{
  if ($programer instanceof BackendProgramer) {
    echo "hallo backend programer " . $programer->name . PHP_EOL;
  } else if ($programer instanceof FrontendProgramer) {
    echo "Hallo frontend programer " . $programer->name . PHP_EOL;
  } else if ($programer instanceof Programer) {
    echo "Hallo programer " . $programer->name . PHP_EOL;
  }
}
