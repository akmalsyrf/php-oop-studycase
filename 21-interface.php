<?php

//mirip seperti abstract class, tapi tidak perlu menggunakan keyword abstract

interface Car
{
    function drive():void;
    function getTire():int;
}

class Vehicle{}

// class Toyota extends Vehicle implements Car //bisa dicombine dengan extends
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
}

$car = new Toyota();
$car->drive();