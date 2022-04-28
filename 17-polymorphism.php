<?php

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendDeveloper extends Programmer{}

class FrontendDeveloper extends Programmer{}

class Company
{
    public Programmer $programmer;
}

$company = new Company();
var_dump($company);
$company->programmer = new BackendDeveloper('Jojo');
var_dump($company);
$company->programmer = new FrontendDeveloper('Momo');
var_dump($company);

/**------------------------------------------ */

//function argument polymorphism
//and type check and type casting
//instanceof = pengecekan instance object
function sayHello(Programmer $programmer)
{
    // echo "Hello, I'm {$programmer->name}" . PHP_EOL;
    if($programmer instanceof BackendDeveloper){
        echo "Hello, I'm {$programmer->name} and I'm a Backend Developer" . PHP_EOL;
    } elseif($programmer instanceof FrontendDeveloper){
        echo "Hello, I'm {$programmer->name} and I'm a Frontend Developer" . PHP_EOL;
    } else {
        echo "Hello, I'm {$programmer->name} and I'm a Programmer" . PHP_EOL;
    }
}
sayHello(new Programmer('Kira'));
sayHello(new BackendDeveloper('Jojo'));
sayHello(new FrontendDeveloper('Momo'));