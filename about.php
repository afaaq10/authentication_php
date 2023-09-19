<?php
class firstClass
{
    public $z;
    function setName($z)
    {
        return $this->z = $z;
    }
    function getName()
    {
        return $this->z;
    }
}
$obj = new firstClass();
$obj->setname("Afaaq");
echo $obj->getname();
