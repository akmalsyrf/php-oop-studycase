<?php

trait CanRun
{
    public abstract function run() : void;
}

class Person
{
    use CanRun;
    
    public function run() : void
    {
        echo "I'm running!\n";
    }
}

$person1 = new Person();
$person1->run();