<?php

//1.Membuat properties
class Person
{
    var string $name; //dengan type declaration
    var $age;
    var $country = "Indonesia"; //default value
    var ?string $gender; //nullable (karena secara default properties tidak boleh null)
}

//2.Manipulasi properties
$person1 = new Person();
$person1->name = "John";
$person1->age = 30;
$person1->gender = null;

echo "Name : $person1->name" . PHP_EOL;
echo "Age : $person1->age" . PHP_EOL . PHP_EOL;
echo "Gender : $person1->gender" . PHP_EOL; //tidak muncul di console

var_dump($person1);