<?php


trait Halo
{
  public string $botName = "";

  public function setBotName($name): void
  {
    $this->botName = $name;
  }
  public function sayHalo(string $name): void
  {
    if (!is_null($name)) {
      if (!empty($this->botName)) {
        echo "Halo " . $name . " Nama saya {$this->botName}";
      } else {
        echo "Halo " . $name;
      }
    } else {
      echo "Halo";
    }
  }
}

class Person
{
  use Halo;
}
