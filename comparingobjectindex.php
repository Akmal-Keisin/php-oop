<?php

require_once "comparingobject.php";

use ComparingObject\Student;

$student1 = new Student();
$student1->id = 1;
$student1->name = "akmal";
$student1->age = 18;

$student2 = new Student();
$student2->id = 1;
$student2->name = "akmal";
$student2->age = 18;

var_dump($student1 === $student2);
