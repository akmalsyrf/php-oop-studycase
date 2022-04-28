<?php

trait A {
    public function doA():void
    {
        echo "success do a trait a" . PHP_EOL;
    }
    public function doB():void
    {
        echo "success do b trait a" . PHP_EOL;
    }
}

trait B {
    public function doA():void
    {
        echo "success do a trait b" . PHP_EOL;
    }
    public function doB():void
    {
        echo "success do b trait b" . PHP_EOL;
    }
}

class Sample{
    // use A,B; //ini konflik

    use A, B{
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();