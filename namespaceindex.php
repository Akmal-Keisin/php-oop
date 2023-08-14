<?php
require_once "namespace.php";

use \AirAttack\AirCraft\{AirCraft, GroundDeffence, Canon};
use \AirAttack\AirCraft2\AirCraft as AirCraft2;

$russianAirCraft = new AirCraft();
$americanAirCraft = new AirCraft2();
$russianAirCraft->info() . PHP_EOL;
$americanAirCraft->info() . PHP_EOL;

use function \Deffence\Attack\attack;
use const \Deffence\AirDeffence\MISSILE;

echo MISSILE . PHP_EOL;
echo attack() . PHP_EOL;
