<?php

class SocialMedia {
    //static property
    static public string $name = "Twitter";

    //static method
    static public function login() {
        echo "Login to ".self::$name;
    }
}

//cara mengaksesnya mirip dengan const 
echo SocialMedia::$name . PHP_EOL;
SocialMedia::login();
