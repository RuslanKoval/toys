<?php
require_once 'vendor/autoload.php';

use toysBoys\Cars;
use toysBoys\Radio;

$cars = new Cars();
$cars ->setName('BMW');
$cars ->setAge('10 let');
$cars ->setMaterials('Plastic');


echo 'Cars:';
echo $cars->__toString();

$radioCars = new Radio();
$radioCars ->setName('Audi');
$radioCars ->setAge('15 let');
$radioCars ->setMaterials('Metal');
$radioCars ->setBattery('6 chasov');
$radioCars ->setDistance('100 m');
$radioCars ->setMaxSpeed('15 km/h');

echo 'Radio Cars:';
echo $radioCars->__toString();
