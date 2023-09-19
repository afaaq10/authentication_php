<?php
abstract class parentClass
{
    public $n;
    abstract protected function getName($n);
}

class child extends parentClass
{
    public function getName($n)
    {
        echo $n;
    }
}

$obj = new child();
$obj->getName("Afaaq");
