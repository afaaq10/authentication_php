<?php
class parentClass
{
    public $z, $y;
    function __construct($name, $age)
    {
        $this->z = $name;
        $this->y = $age;
        echo $this->z . "\n" . $this->y . "<br>";
    }

    function getName($n)
    {
        echo $n;
    }
}

class child extends parentClass
{
    function getName($n)
    {
        echo $n;
    }
}

$obj = new parentClass("Hello", 22);
$obj->getName(" Majeed");
