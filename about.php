<?php

class firstClass
{
    public $z, $x, $y;
    function getSum()
    {
        return $this->z = $this->x + $this->y;
    }
    function getSub()
    {
        return $this->z = $this->x - $this->y;
    }
}
$objSum = new firstClass();
$objSub = new firstClass();

echo $objSum->getSum() . "<br>";
echo $objSub->getSub();
