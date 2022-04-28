<?php

//function yang langsung dijalankan ketika class di-instansiasi

class Person
{
    function __construct($name, string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person('John', 30);
echo "$person1->name is $person1->age years old.\n\n";

var_dump($person1);