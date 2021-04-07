<?php

include_once 'Circle.php';
include_once 'Cylinder.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$circle = new Circle('Circle 01', 3);
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
$circle->resize(50);
echo 'Resize circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
$cylinder->resize(50);
echo 'Resize cylinder area: ' . $cylinder->calculateArea() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
$rectangle->resize(50);
echo 'Resize rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4, 4, 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';
$square->resize(50);
echo 'Resize square area: ' . $square->calculateArea() . '<br />';