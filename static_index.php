<?php
class OneP
{
    public static $name = 'Kishor<hr>';
    public static function FunctionName()
    {
        return "Hi How are you?<hr>";
    }
}

class TwoP extends OneP
{
    public function twoFunction($data)
    {
        OneP::$name = $data;
        echo OneP::$name . '<hr>';
    }
}

echo OneP::$name;
echo OneP::FunctionName();

$obj = new TwoP;
$obj->twoFunction('Kiran');
