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
}

$student1 = new Student("John", "20", "12345");
echo $student1->country . "\n";
$student1->sayHello();