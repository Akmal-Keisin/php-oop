<?php

// zone Europe/Berlin php.ini
$dateTime = new DateTime();
$dateTime->setDate(2004, 1, 8);
$dateTime->setTime(10, 10, 10);
var_dump($dateTime);


// DateInterval
$dateTime2 = new DateTime();
$dateTime->add(new DateInterval("P1Y"));
$dateTime2->setTimezone(new DateTimeZone("Asia/Jakarta"));

$dateMinus = new DateInterval("P4Y");
$dateMinus->invert = true;

$dateTime2->add($dateMinus);

$time = $dateTime2->format("Y-m-d H:i:s");
var_dump($dateTime2);
echo $time;

$date = DateTime::createFromFormat("Y-m-d H:iss:s", "2020-10-10 9:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
  var_dump($date);
} else {
  echo "false";
}
