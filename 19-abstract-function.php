<?php

abstract class Animal
{
    public $name;
    public abstract function run() : void;
}
class Cat extends Animal
{
    public function run() : void //harus ada method run, jika tidak akan error
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

$cat1 = new Cat();
$cat1->name = "Catty";
$cat1->run();