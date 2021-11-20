<?php
class Mobile
{
    public $name;
    public $price;
    public $color;

    public function whatisname($data)
    {
        $this->name = $data;
        echo "Mobile brand is " . $this->name . "<br>";
    }
}

class Samsung extends Mobile
{

    public function getSamsung()
    {
        echo "Samsung Brand is here" . "<br>";
    }
}

class Jprime extends Samsung
{
    public function getData()
    {
        echo $this->getSamsung() . "<br>";
        echo $this->whatisname("Samsung a") . "<br>";
    }
}

$obj = new Jprime();
$obj->whatisname("Samsung");
$obj->getSamsung();
$obj->getData();
