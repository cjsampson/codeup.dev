<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$cj = new Person('CJ Sampson');

$staff = new Staff([$cj]);

$pizzaShop = new Business($staff);

$pizzaShop->hire(new Person('John Taylor'));

var_dump($pizzaShop->getStaffMembers());
