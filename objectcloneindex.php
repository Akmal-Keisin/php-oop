<?php

require_once "objectclone.php";

$student1 = new Student();
$student1->id = 1;
$student1->name = "Akmal Keisin Alfateh";
$student1->age = 18;

$student2 = clone $student1;
$student2->name = "Nama siswa 2";

var_dump($student1);
var_dump($student2);
