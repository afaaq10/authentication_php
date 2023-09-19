<?php
class firstClass
{
    public $z, $y;

    function __construct($a, $p)
    {
        $this->z = $a;
        $this->y = $p;
    }

    function show()
    {
        echo $this->z . "\n" . $this->y;
    }
}
$obj = new firstClass("Hello", 24);
$obj->show();
