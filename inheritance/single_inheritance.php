<?php
class FamilyModel
{
    public $name;
    public $family_ava;
    public $age;
    public $work;

    public function newName($data)
    {
        $this->name = $data;
        echo "Name is " . $this->name;
    }

    public function __construct($givenname, $givenfamily_ava, $givenage, $givenwork)
    {
        $this->name = $givenname;
        $this->family_ava = $givenfamily_ava;
        $this->age = $givenage;
        $this->work = $givenwork;
    }
}

class SonModel extends FamilyModel
{
    public $food;
    public function favfood($data)
    {
        $this->food = $data;
        echo "Fav Food is " . $this->food . "<br>";
    }
}

$obj = new SonModel("Shyam", "5", "39", "Doctor");
$worked = "The work is " . $obj->work . "<br>";
echo $worked;
echo $obj->favfood("pizza");
echo $obj->newName("Ram");
