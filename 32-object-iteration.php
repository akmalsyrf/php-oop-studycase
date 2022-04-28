<?php

//melakukan iterasi dengan foreach
class Data 
{
    var $name = "John Doe";
    public $age = "25";
    private $address = "Jalan Kebon Jeruk No.12, Jakarta Barat";
    protected $hobbies = "Badminton";
}

$data = new Data();

foreach ($data as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}

//membuat iterator secara manual

class Data2
{
    var $name = "John Doe";
    public $age = "25";
    private $address = "Jalan Kebon Jeruk No.12, Jakarta Barat";
    protected $hobbies = "Badminton";

    public function getIterator()
    {
        $array = array(
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'hobbies' => $this->hobbies
        );

        return new ArrayIterator($array);
    }
}

$data2 = new Data2();
var_dump($data2->getIterator());

