<?php

require_once "covariancecontravariance.php";
require_once "covariancecontravariancefood.php";
require_once "covariancecontravarianceanimalshelter.php";

$dogInit = new DogShelter();
$dog = $dogInit->adopt("JOKO");
$dog->eat(new AnimalFood);
// var_dump($dog);

$catInit = new CatShelter();
$cat = $catInit->adopt("MULYONO");
$cat->eat(new Food);
// var_dump($cat);
