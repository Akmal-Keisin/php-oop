<?php
require_once "interface.php";

use Car\Sports\Lamborgini;

$lamborgini = new Lamborgini();
echo $lamborgini->brandInfo() . PHP_EOL;
echo $lamborgini->brandVersion() . PHP_EOL;
echo $lamborgini->partName();
