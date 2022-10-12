<?php 

require './vehicle.php';
require './bicycle.php';
require './car.php';
require './truck.php';

$car = new Vehicle('blue', 4);

var_dump($car);

$car->forward();

var_dump($car);

echo $car->brake();

var_dump($car);

$velo = new Bicyle('blue', 1);

var_dump($velo);

$tesla = new Car('green', 4, 'electric');
var_dump($tesla);
echo $tesla->forward();
var_dump($tesla);

$scania = new Truck('white', 3, 'diesel', 100);
var_dump($scania);
echo $scania->forward();
var_dump($scania);
echo $scania->brake();
var_dump($scania);

?>