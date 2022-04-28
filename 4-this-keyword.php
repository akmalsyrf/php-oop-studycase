<?php

//untuk menyebut properties dari object dirinya sendiri
class Person
{
    var string $name = 'siapa hayo';

    function sayHello(?string $name)
    {
        if(is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }
}

$person1 = new Person();
$person1->sayHello(null);
$person1->sayHello('John');