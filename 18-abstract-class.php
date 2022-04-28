<?php

abstract class Location
{
    function __construct($name)
    {
        $this->name = $name;
    }
}
class City extends Location
{
    public $name;
    public $country;
    public $population;
    public function __construct($name, $country, $population)
    {
        parent::__construct($name);
        $this->country = $country;
        $this->population = $population;
    }
}
class Province extends Location{}
class Country extends Location{}

// $location = new Location('Jakarta'); //error karena abstract class
$city1 = new City('Jakarta', 'Indonesia', '16.5 million');
var_dump($city1);