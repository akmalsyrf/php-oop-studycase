<?php

trait SayGoodBye
{
    public function sayGoodBye(?string $name = null) : void
    {
        if(!is_null($name)){
            echo "Good bye, {$name}!\n";
        }else{
            echo "Good bye!\n";
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name = null) : void
    {
        if(!is_null($name)){
            echo "Hello, {$name}!\n";
        }else{
            echo "Hello!\n";
        }
    }
}

trait HasName
{
    public string $name;
}

//look at this
trait All {
    use SayGoodBye, SayHello, HasName;
}