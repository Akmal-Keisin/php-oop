<?php

// $mathces = [];
// $result = preg_match("/ada|kami/i", "Kami Ada Di Selruruh Masalah Anda", $mathces);

// $mathces = [];
// $result = preg_match_all("/ada|kami/i", "Kami Ada Di Selruruh Masalah Anda", $mathces);

$mathces = [];
$result = preg_split("/[\s,-]/", "Kami Ada Di, Selruruh Masalah-Anda");

var_dump($result);
var_dump($mathces);
