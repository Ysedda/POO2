<?php

requireonce 'Vehicle.php';
requireonce 'Truck.php';
$bigDaddy = new Truck('blue', 2, 'oil', 500);
var_dump($bigDaddy);
$bigDaddy->setCargo(600);
$bigDaddy->forward();
$bigDaddy->brake();
$bigDaddy->isFull();
var_dump($bigDaddy);
