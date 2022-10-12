<?php 

require './vehicle.php';
require './bicycle.php';
require './car.php';
require './truck.php';

echo 'Creation d\'un véhicule' . '<br>';
$car = new Vehicle('blue', 4);
var_dump($car);

echo 'Le véhicule avance' .  '<br>';
$car->forward();
var_dump($car);

echo 'Le véhicule freine' . '<br>';
echo $car->brake() . '<br>';
var_dump($car);

echo 'Creation d\'un vélo' . '<br>';
$velo = new Bicyle('blue', 1);
var_dump($velo);

echo 'Creation d\'une voiture électrique' . '<br>';
$tesla = new Car('green', 4, 'electric');
var_dump($tesla);

echo 'La voiture avance' . '<br>';
echo $tesla->forward();
var_dump($tesla);

echo 'La voiture freine' . '<br>';
echo $tesla->brake();
var_dump($tesla);

echo 'Création d\'un camion' . '<br>';
$scania = new Truck('white', 3, 'diesel', 100);
var_dump($scania);

echo 'Le camion avance' . '<br>';
echo $scania->forward();
var_dump($scania);

echo 'Le camion freine' . '<br>';
echo $scania->brake();
var_dump($scania);

echo 'On charge le camion avec une valeur négative' . '<br>';
$scania->setLoading(-10);
var_dump($scania);

echo 'On charge le camion avec une trop élevée' . '<br>';
$scania->setLoading(200);
var_dump($scania);

echo 'On charge le camion' . '<br>';
$scania->setLoading(20);
var_dump($scania);

?>