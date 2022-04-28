<?php

class Person
{
    function __construct($name, $age, $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }
}

class Employee extends Person
{
    function __construct($name, $age)
    {
        parent::__construct($name, $age, 'Employee');
    }
}

$employee1 = new Employee('John', 30);
echo $employee1->position;