<?php

class Person
{
    var $country = 'France';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function sayHello()
    {
        echo "Hello, my name is $this->name.\n";
    }
}

class Student extends Person
{
    function __construct($name, $age, $studentId)
    {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }
    //overriding
    function sayHello()
    {
        echo "Hello, my name is $this->name and I am a student.\nMy student ID is $this->studentId.\n";
    }
}

$student1 = new Student("John", "20", "12345");
echo $student1->country . "\n";
$student1->sayHello();