<?php

// Abstract class...

// This class has abstract keyword with it..
// You cannot create object of astract class only derived class(extended class) can have the object.
// Cannot contain function body, only function definition in the parent class.
// The parent class should contain atleast one abstract function.
// The function body should be in the child class.

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

// ----------------------------------------------------------------------------------------


// Interface is used to inherit from multiple classes.
// Interface has no properties declaration in them.
// Interface has only abstract functions i.e only function definition.
// The function body is written in the child class

interface  I1
{
    function getNames();
}

interface  I2
{
    function getNames2();
}
class child2 implements I1, I2
{
    public function getNames()
    {
        echo "Interface 1";
    }
    public function getNames2()
    {
        echo "Interface 2";
    }
}

$obj = new child2();
$obj->getNames();


// Using the static keyword with properties and methods.....
// if you are using it with derived class then you have to create an object otherwise no need to create an object

class base
{
    protected static $age = 28;

    public function getAge()
    {
        echo static::$age;
    }
}

class derived extends base
{

    protected static $age = 30;
}

$objj = new derived();
$objj->getAge();



// Playing around with the traits............................................
trait first
{
    function myFunc()
    {
        echo "Hello I am a trait";
    }

    function myFunc2()
    {
        echo "Hello I am a trait2";
    }
}

class traitClass
{
    use first;
}

$obj = new traitClass();
$obj->myFunc2();


// Method chaining..................
// Use the "return $this" for method chaining 
class myChain
{
    function myFunc()
    {
        echo "Hello I am a func";
        return $this;
    }

    function myFunc2()
    {
        echo "Hello I am a func2";
    }
}

$obj = new myChain();
echo $obj->myFunc()->myFunc2();
