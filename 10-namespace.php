<?php

//untuk menampung class agar tidak terjadi bentrok penamaan class

namespace Data\One{
    class User{
        public function getUser(){
            echo "namespace user one"  . PHP_EOL;
        }
    }
    class Person {
        public function getPerson(){
            echo "namespace person" . PHP_EOL;
        }
    }
}

namespace Data\Two{
    class User{
        public function getUser(){
            echo "namespace user two" . PHP_EOL;
        }
    }
}

//error
// $user1 = new Data\One\User(); 
// $user1->getUser();

// $user2 = new Data\Two\User();
// $user2->getUser();


//bisa juga untuk function dan constant

namespace Helper {
    function helper(){
        echo "namespace helper function";
    }
    const NAME = "namespace helper const";
}