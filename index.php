<?php

echo "Learn Advanced PHP with Kishor Kc" . "<br>";

class Car
{
    // properties
    public $name;
    public $color;
    public $isAvailable = false;

    // methods
    public function testFunctions($data)
    {
        echo $data;
    }

    public function arrayFunctions($data)
    {
        foreach ($data as $key => $value) {
            echo "<br>" . $key . ":" . $value . "<br>";
        }
    }

    public function thisKeywordFunction($data)
    {
        $this->name = $data;
        echo "The person is available to ride the car is " . $this->name . "<br>";
    }

    // initialize construction
    // the construct function starts with two underscores (__)!
    public function __construct($namegiven, $colorname)
    {
        $this->name = $namegiven;
        $this->color = $colorname;
        echo "<br>" . "The name is " . $this->name . ". " . "The color is " . $this->color;
    }

    // the destruct function starts with two underscores (__)!
    // donot have any args

    public function __destruct()
    {
        echo "<br>" . "The name is " . $this->name . ". " . "The color is " . $this->color;
    }
}

// calling object
$obj = new Car("Php", "green");

echo $obj->color . "<br>";
echo $obj->testFunctions('Welcome to PHP');
echo $obj->arrayFunctions(
    [
        "brand" => 'Skoda',
        "model" => 'Octavia',
        "color" => "green",
        "class" => "Seduan",
        "music_system" => "JBL",
        "wheel" => 'Alloy',
    ]
);
echo $obj->name . "<br>";
echo $obj->thisKeywordFunction('hary');


$objs = new Car("OOP", "purple");
