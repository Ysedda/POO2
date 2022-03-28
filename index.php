<?php

require_once 'Vehicle.php';
require_once 'Truck.php';
$bigDaddy = new Truck('blue', 2, 'oil', 500);
var_dump($bigDaddy);
$bigDaddy->setCapacity(600);
$bigDaddy->forward();
$bigDaddy->brake();
var_dump($bigDaddy);
echo $bigDaddy->isFull();
