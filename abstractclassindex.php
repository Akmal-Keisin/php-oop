<?php
require_once "abstractclass.php";

$jogja = new Jogja("Jogja");
$jogja->sayHello();
var_dump($jogja);

$semarang = new Semarang("Semarang");
$semarang->sayHello();
var_dump($semarang);

$jakarta = new Jakarta("Jakarta");
$jakarta->sayHello();
var_dump($jakarta);
