<?php

//secara default jika visibility tidak didefinisikan, maka akan didefiniskan sebagai public

class Person
{
    public function getName(){
        echo "get name" . PHP_EOL;
    }
    protected function getPerson()
    {
        echo "get person" . PHP_EOL;
    }
    private function getPeople(){
        echo "get people" . PHP_EOL;
    }
}

$person1 = new Person();
$person1->getName();
// $person1->getPerson(); //error
// $person1->getPeople(); //error
?>

<!-- helper file -->
<html>
    <img src="helper/visibility.JPG" alt="">
</html>