<?php
require_once "polymorphism.php";

$company = new Company("Keisin");
$company->programer = new Programer("Januar");
var_dump($company);

$company = new BackendProgramer("Afiy");
var_dump($company);

$company = new FrontendProgramer("Test");
var_dump($company);

sayHelloProgramer(new Programer("Keisin"));
sayHelloProgramer(new BackendProgramer("Januar"));
sayHelloProgramer(new FrontendProgramer("Afiy"));
