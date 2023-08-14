<?php

require_once "overloading.php";

use Overloading\Zero;

$zero = new Zero();
var_dump($zero->test = "Test");
var_dump($zero->test);
var_dump(isset($zero->test));
unset($zero->test);
$zero->test(1, 2, 3, 4, 5, 6);
Zero::test(1, 2, 3, 4, 5, 6);
