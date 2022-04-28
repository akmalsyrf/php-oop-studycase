<?php

require_once './10-namespace.php';

$user1 = new Data\One\User();
$user1->getUser();

echo Helper\NAME . PHP_EOL;
Helper\helper();