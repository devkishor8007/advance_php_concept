<?php
class First
{
    public function firstName()
    {
        return "First is calling";
    }
}

class Second extends First
{
    public function secondName()
    {
        return "Second is calling";
    }

    public function getAll()
    {
        echo "First: " . $this->firstName();
        echo "<hr>Second: " . $this->secondName();
    }
}

class Third extends First
{
    public function thirdnName()
    {
        return "Third is calling";
    }

    public function getAll()
    {
        echo "First: " . $this->firstName();
        echo "<hr> Third: " . $this->thirdnName();
    }
}

class Fourth extends First
{
    public function fourthName()
    {
        return "Fourth is calling";
    }
    public function getAll()
    {
        echo "First: " . $this->firstName();
        echo "<hr> Third: " . $this->fourthName();
    }
}

$obj = new Third;
$obj->getAll();

$obj_2 = new Second;
$obj_2->getAll();

$obj_3 = new Fourth;
$obj_3->getAll();
