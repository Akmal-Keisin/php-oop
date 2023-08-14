<?php 
require_once "Car.php";

$object = new Car(200, 200);
$object->carName = "Lamborgini";
$object->carSpeed = null;
$object->carWeight = 400;

echo $object->turbo();
var_dump(Car::TEST);
?>