<?php
require_once "functionoverriding.php";

$rectangle = new Rectangle("Rectangle");
var_dump($rectangle->getCorner());
var_dump($rectangle->getParentCorner());
