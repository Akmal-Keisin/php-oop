<?php

class Car
{
  const TEST = "hello";
  // var ?string $carName; -> boleh null karena ada "?"
  var ?string $carName = null;
  var ?int $carSpeed = 0;
  var int $carWeight = 0;
  var string $carColor = "red";


  // function yang pertama kali dipanggil ketika object dibuat
  function __construct(int $carSpeed, int $carWeight)
  {
    $this->carSpeed = $carSpeed;
    $this->carWeight = $carWeight;
  }

  function info()
  {
    echo "Car Speed : " . $this->carSpeed . PHP_EOL;
    echo "Car Weight : " . $this->carWeight . PHP_EOL;
    echo "Car Color : " . $this->carColor . PHP_EOL;
    echo "Car Name : " . $this->carName . PHP_EOL;
    return "Success";
  }


  function turbo()
  {
    echo self::TEST;
    echo "<br>";
    echo $this->carName . "<br>" . $this->carSpeed . "<br>" . $this->carWeight . "<br>";
    return $this->carSpeed * 2;
  }
}
