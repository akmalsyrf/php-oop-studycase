<?php

class Shape
{
    function getCorner():int
    {
        return 0;
    }
}

class Square extends Shape
{
    function getCorner():int
    {
        return 4;
    }
    function getParentCorner():int
    {
        return parent::getCorner();
    }
}

$square = new Square();
echo $square->getCorner() . "\n";
echo $square->getParentCorner() . "\n";