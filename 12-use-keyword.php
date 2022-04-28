<?php

require_once './10-namespace.php';

use Data\One\{User, Person}; //grouping use declaration
// use Data\Two\User; //error karena nama class konflik 
//solusinya
use Data\Two\User as User2;

use function Helper\helper;
use const Helper\NAME;

$user1 = new User();
$user1->getUser();

$person1 = new Person();
$person1->getPerson();

$user2 = new User2();
$user2->getUser();

echo NAME . PHP_EOL;
helper();