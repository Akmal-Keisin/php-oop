<?php 
require_once "generatorobject.php";

foreach(getGanjil(100) as $value) {
  echo "Ganjil : " . $value . PHP_EOL;
}
