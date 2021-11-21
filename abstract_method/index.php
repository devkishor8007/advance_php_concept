<?php
abstract class Myname
{
    public abstract function getName();
    protected abstract function whatName($data);
}

class Name extends MyName
{
    public $name = "Kishor";
    public function getName()
    {
        return "My name is Kishor<hr>";
    }

    protected function whatName($data)
    {
        echo "What is my name $data";
    }

    public function getAllName()
    {
        echo $this->getName();
        echo $this->whatName('Anisha');
    }
}

$obj = new Name;
echo $obj->getAllName();
