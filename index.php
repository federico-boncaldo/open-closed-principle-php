<?php

require 'vendor/autoload.php';

use Acme\Square;
use Acme\Circle;
use Acme\AreaCalculator;

$shapes = [
    new Square(2),
    new Square(4),
    new Square(3),
    new Circle(2),
    new Circle(3)
];

$calculator = new AreaCalculator();

echo $calculator->calculate($shapes);