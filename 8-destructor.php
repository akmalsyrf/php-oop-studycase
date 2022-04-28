<?php

//function yang langsung dijalankan ketika class dihapus dari memory
//cocok digunakan untuk menutup koneksi database atau menutup proses menulis file, sehingga tidak terjadi memory leak

class Person
{
    function __construct($name, string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    
    function __destruct()
    {
        echo "Object $this->name and $this->age is destroyed.\n\n";
    }
}

$person1 = new Person("John", "20");
echo "Object $person1->name and $person1->age is created.\n";

