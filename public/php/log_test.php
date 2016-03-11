<?php

require 'Log.php';


// Procedural/functional example
// $logSomething = new Log();

// $logSomething->info();

$newLog = new Log('cli');
$newLog->error();
$newLog->info();