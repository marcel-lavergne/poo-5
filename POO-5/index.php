<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('red',3, 'gasoline', 20);
$highRoad = new MotorWay();
$mediumRoad = new ResidentialWay();
$smallRoad = new PedestrianWay();
$supercar = new Car('blue', 4, 'electric');

var_dump($supercar->isHasParkBrake());
try {
    $supercar->start();
} catch (LogicException $e) {
    $supercar->setHasParkBrake(false);
} catch (Exception $e) {
    $supercar->setHasParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($supercar->isHasParkBrake());

