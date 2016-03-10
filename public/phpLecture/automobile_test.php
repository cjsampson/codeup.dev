<?php

require_once "Automobile.php";

$make = "vw";
$model = "bug";
$color = "blue";

$car1 = new Automobile($make, $model, $color);
echo $car1->getDescription();