<?php
class MyName
{
    // protected can be access everyside
    public $name = "Kishor";
    // protected can't be access outside the class
    protected $age = "15";
    // private can't be access outside the class
    private $learn = "php";

    // public, private and protected are access to this function with in a same class
    function callFunction()
    {
        echo "<hr>My name is " . $this->name . " I am " . $this->age . "years old. " . "I am learning " . $this->learn;
    }
}

// while making another class i.e working in single inheritance private and protected are can'be access of MyName class  
class HisName extends MyName
{
    function hisName()
    {
        return "<hr>Another function";
    }
}

$obj = new HisName;
echo $obj->name;
// echo $obj->age;
// echo $obj->learn;
echo $obj->hisName();
echo $obj->callFunction();
