<?php

class Math
{
  static int $number;

  static public function sum(array $numbers)
  {
    $result = 0;
    foreach ($numbers as $number) {
      $result += $number;
    }
    return $result / count($numbers);
  }
}
