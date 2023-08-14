<?php

require_once "magicfunction.php";

use MagicFunction\Student;

$student = new Student();
$student->id = 1;
$student->name = "Akmal";
$student->age = 18;

var_dump((string) $student);
var_dump((array) $student);
$student("Akmal", "Keisin", "Alfateh");
var_dump($student);
