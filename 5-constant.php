<?php

//mulai versi PHP 5.6 diperkenalkan dengan keyword const, sama dengan define()
//namun kali ini kita akan menggunakan keyword const di class

class Person
{
    const NAME = 'John Doe';
    const AGE = 30;
}
//1.Mengakses constant
echo Person::NAME . ' is ' . Person::AGE . ' years old.' . PHP_EOL;



//semuanya dibawah ini ga error, but i don't know why padahal katanya constant njir
// $person1 = new Person();
// echo $person1::NAME . ' is ' . $person1::AGE . ' years old.' . PHP_EOL;

// $person2 = new Person();
// $person2->NAME = 'panjul';
// $person2->AGE = 25;
// echo $person2->NAME . ' is ' . $person2->AGE . ' years old.';
