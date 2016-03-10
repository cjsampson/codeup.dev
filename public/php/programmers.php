<?php

require_once 'Li.php';
require_once 'Ul.php';
$programmers = new Ul();
$ryan = new Li();
$ryan->content = 'Ryan';
$programmers->addItem($ryan);
$cameron = new Li();
$cameron->content = 'Cameron';
$programmers->addItem($cameron);
echo PHP_EOL . $programmers->asHtml() . PHP_EOL;