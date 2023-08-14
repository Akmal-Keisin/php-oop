<?php


class Plane
{

  final public function info()
  {
    echo "Plane Info";
  }
}

class Sukhoi extends Plane
{
  public function getInfo()
  {
    echo $this->info() . "Sukhoi" . PHP_EOL;
  }
}
