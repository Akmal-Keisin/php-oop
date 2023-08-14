<?php

namespace Car\Sports;

interface Part
{
  function partName(): string;
}

interface Car extends Part
{
  function brandInfo(): string;

  function brandVersion(): string;
}
class Lamborgini implements Car
{
  public string $brandName = "Lamborgini";
  public string $Version = "1.99 BETA";
  public string $partName = "Metal";

  public function brandInfo(): string
  {
    return $this->brandName;
  }

  public function brandVersion(): string
  {
    return $this->Version;
  }

  public function partName(): string
  {
    return $this->partName;
  }
}
