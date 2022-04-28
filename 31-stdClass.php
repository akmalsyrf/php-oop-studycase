<?php

$array = [
    'name' => 'John Doe',
    'age' => '25',
    'address' => 'Jalan Kebon Jeruk No.12, Jakarta Barat',
    'hobbies' => ['Badminton', 'Basket', 'Futsal']
];

$object = (object)$array;

var_dump($object);

echo $object->name . PHP_EOL;
echo $object->age . PHP_EOL;
echo $object->address . PHP_EOL;
echo $object->hobbies[0] . PHP_EOL;