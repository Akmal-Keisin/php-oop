<?php
class Shape
{
  function __construct($param1, $param2)
  {
    echo $param2 . PHP_EOL;
    echo $param1 . PHP_EOL;
  }

  function getCorner()
  {
    return 0;
  }
}

class Rectangle extends Shape
{

  public function __construct($test3)
  {
    parent::__construct($test3, "TestRectangle");
  }

  function getCorner()
  {
    return 4;
  }
  function getParentCorner()
  {
    return parent::getCorner();
  }
}
