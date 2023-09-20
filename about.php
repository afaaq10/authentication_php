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


// __autoload() function is used if you have different files having a single class in each(file name should be same as class name).
// Now if i want to use these two files in one single file, we use __autoload() magic function and then write include with .php extension


// __get() magic method is called when you try to access a private property or any undefined property.
// __set() is just like set, when you try to set private or undefined property, it gets called.

// __call() is just like get, when you try to get private or undefined method, it gets called.
// __callStatic() is just like call(), but it is used when instead of creating a new object instance you use static keyword...

class checkMagic
{
    private $n = "Afaaq Majeed";

    public function  __get($property)
    {
        echo "This property is private ($property)";
    }

    public function  __set($property, $value)
    {
        echo "This property is private ($property) ($value)";
    }
}

$obj = new checkMagic();
$obj->n = "Hello";


class checkStatic
{

    private static function name()
    {
        echo "I am a private function";
    }

    public static function  __callStatic($method, $args)
    {

        if (method_exists(__class__, $method)) {

            call_user_func_array([__class__, $method], $args);
        } else {
            echo "This property is private ($method)";
        }
    }
}

checkStatic::name();


// isset($variablename) is used to check whether a variable is set (returns true or false) or __isset() gets called when a variable which is private or undefined is called or used and we can access that private var in __isset() function...
// unset($variablename) to destroy a variable..to unset a private property we use __isunset() function which gets called when you try to unsset a provate/undefiend property
// __toString(), __sleep(), __wakeup()
// The serialize .....serialize($obj)....... converts an object into an array which can be stored, an object can't be stored directly in database or in file or in sessions in OOps.

// In oops object get copied by refernce not by value...to prvent this we use "clone" keyword to achieve copy by clone for properties
