<?php

interface Data
{
    public function getName();
    function getA();
    function getB($data);
}
class One implements Data
{
    public function getName()
    {
        echo "This is OneName function<hr>";
    }
    function getA()
    {
        echo "This is getA function<hr>";
    }

    function getB($data)
    {
        echo "The name of the function is $data";
    }

    public function getALlData()
    {
        echo $this->getName() . $this->getA() . $this->getB("Hello");
    }
}

$obj = new One();
$obj->getALlData();
