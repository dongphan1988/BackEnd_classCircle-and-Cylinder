<?php
include "Circle.php";
include "Cylinder.php";
echo "<h1> Circle </h1>";
$circle = new Circle();
$circle->setRadius(30);
$circle->setColor("red");
$circle ->area();
$circle->toString();
echo "<h1> Cylinder </h1>";
$cylinder = new Cylinder();
$cylinder->setRadius(50);
$cylinder->setColor("black");
$cylinder->setHeight(60);
$cylinder->toString();
?>