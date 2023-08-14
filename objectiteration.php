<?php

class Data implements IteratorAggregate
{
  var $one = "one";
  public string $two = "two";
  protected string $three = "three";
  private string $four = "four";

  public function getIterator(): Traversable
  {
    yield "first" => $this->one;
    yield "second" => $this->two;
    yield "third" => $this->three;
    yield "fourth" => $this->four;

    //     $array = [
    //       "first" => $this->one,
    //       "second" => $this->two,
    //       "third" => $this->three,
    //       "fourth" => $this->four
    //     ];
    // 
    //     return new ArrayIterator($array);
  }
}
