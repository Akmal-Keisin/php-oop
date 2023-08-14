<?php
require_once "visibility.php";

$product = new Product("Apple", 10000);
var_dump($product->getName());
var_dump($product->getPrice());
