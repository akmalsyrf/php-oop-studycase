<?php

interface HasBrand {
    public function getBrand() : string;
}

interface IsMaintenance {
    public function IsMaintenance() : bool;
}

//bisa extends interface bahkan bisa lebih dari satu, tapi tidak bisa extends class
interface Car extends HasBrand, IsMaintenance {
    public function drive() : void;
    public function getTire() : int;
}

class Toyota implements Car
{
    public function drive():void
    {
        echo "Driving Toyota";
    }
    public function getTire():int
    {
        return 4;
    }
    public function getBrand():string
    {
        return "Toyota";
    }
    public function IsMaintenance():bool
    {
        return false;
    }
}

$car = new Toyota();
$car->drive();