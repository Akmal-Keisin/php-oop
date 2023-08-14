<?php
require_once "inheritance.php";

$lamborgini1 = new Lamborgini(200, 300);
$lamborgini1->carName = "Lamborgini Supra";
var_dump($lamborgini1->info());
