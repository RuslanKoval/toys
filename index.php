<?php
ini_set('display_errors', E_ALL);
//ini_set('error_reporting',);

require_once 'vendor/autoload.php';

use toysBoys\Cars;
use toysBoys\Radio;

$cars = new Cars([
    'name' => 'BMW',
    'age' => '10',
    'materials' => 'plastic',
    'price' =>'100',
    'color' =>'red'
]);
//$cars ->setName('BMW');
//$cars ->setAge('10 let');
//$cars ->setMaterials('Plastic');
//print_r($cars);

//echo 'Cars:';
//echo $cars->__toString();
$radioCars = new Radio();
$radioCars->setName('Audi');
$radioCars->setAge('15 let');
$radioCars->setMaterials('Metal');
$radioCars->setBattery('6 chasov');
$radioCars->setDistance('100 m');
$radioCars->setMaxSpeed('15 km/h');

echo 'Radio Cars: <ul>';
echo $radioCars->__toString();
echo '</ul>';
echo 'Заполнения конструктором<ul>';
//print_r($cars);
foreach ($cars->params as $key => $value) {
    echo '<li>';
    print_r($value);
    echo '</li>';
}
echo '</ul>';

$radiocars = new Radio([
    'name' => 'BMW',
    'age' => '10',
    'materials' => 'plastic',
    'battery' =>'100',
    'maxSpeed' =>'25 k/h',
    'param1' =>'1',
    'param2' =>'2',
    'param3' =>'3',
    'param4' =>'4'
]);

echo 'Заполнения конструктором c наследованием<ul>';
//print_r($cars);
foreach ($radiocars->params as $key => $value) {
    echo '<li>';
    echo $key . ' = ' . $value;
    echo '</li>';
}
echo '</ul>';