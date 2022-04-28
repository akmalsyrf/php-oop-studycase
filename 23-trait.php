<?php


trait SayGoodBye
{
    public function sayGoodBye(?string $name = null) : void
    {
        if(!is_null($name)){
            echo "Good bye, {$name}!\n";
        }else{
            echo "Good bye!\n";
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name = null) : void
    {
        if(!is_null($name)){
            echo "Hello, {$name}!\n";
        }else{
            echo "Hello!\n";
        }
    }
}

trait HasName
{
    public string $name;
}

class Person
{
    use SayGoodBye, SayHello, HasName;
}

$person1 = new Person();
$person1->sayHello('Jojo');
$person1->sayGoodBye('Kira');
$person1->name = 'Jojo';
var_dump($person1);