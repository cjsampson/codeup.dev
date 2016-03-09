<?php

require 'Person.php';

$cj = new Person();
$cj->fruits[] = 'pomegranate';
array_push($cj->fruits, 'banana');
$cj->addFavoriteFruit('watermelon');

var_dump($cj);