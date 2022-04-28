<?php

class Person
{
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}

$person1 = new Person();
$person1->sayHello('John');