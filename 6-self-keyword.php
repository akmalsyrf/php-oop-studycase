<?php

//untuk menyebut class dirinya sendiri
class Person 
{
    const NAME = 'John Doe';

    function info()
    {
        echo Person::NAME . PHP_EOL;
        echo self::NAME . PHP_EOL;
    }
}

$person1 = new Person();
$person1->info();