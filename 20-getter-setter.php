<?php

class Category
{
    private string $name;
    private string $expensive;

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        if(trim($name) !== '') {
            $this->name = $name;
        }
    }

    public function isExpensive() : bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive) : void
    {
        $this->expensive = $expensive;
    }
}

$category1 = new Category();
$category1->setName('Macbook');
$category1->setName(' ');
$category1->setExpensive(true);

echo "Name : {$category1->getName()}" . PHP_EOL;
echo "Expensive : {$category1->isExpensive()}" . PHP_EOL;