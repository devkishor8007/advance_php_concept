<?php
class OneFunction
{
    function OneName()
    {
        echo "Hello One function<hr>";
    }

    public function TwoName()
    {
        echo "Hello public Two function<hr>";
    }
    // private and protected are access to this function with in a same class and can't be access outside the class
    private function ThreeName()
    {
        echo "Hello private Three function<hr>";
    }
    protected function FourName()
    {
        echo "Hello protected Four function<hr>";
    }
}

$obj = new OneFunction;
$obj->OneName();
$obj->TwoName();
// $obj->ThreeName(); // gives an output error because private method can'be call within a class
// $obj->FourName(); // gives an output error because protected method can'be call within a class