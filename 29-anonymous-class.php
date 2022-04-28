<?php

interface HelloWorld{
    function sayHello(): void;
}

$helloWorld = new class("Anonymous class") implements HelloWorld{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name";
    }
};

$helloWorld->sayHello();