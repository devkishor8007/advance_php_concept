<?php

use Second as GlobalSecond;

trait demo
{
    public function demoFunction()
    {
        return "This is one<hr>";
    }

    function demo1Function()
    {
        return "This is one private<hr>";
    }
}

trait second
{
    public function secondFunction($data)
    {
        return "Hello Second $data<hr>";
    }
}

trait third
{
    protected function thirdFunction()
    {
        return "Hello Third<hr>";
    }
}

class GetDemo
{
    use demo, second, third;
}

class TestDemo extends GetDemo
{
    function ab()
    {
        return "Hello Protected function<hr>" . $this->secondFunction('Thank you');
    }

    function cd()
    {
        return "This is protected function trait<hr>" . $this->thirdFunction();
    }
}

$obj = new TestDemo;
echo $obj->demoFunction();
echo $obj->demo1Function();
echo $obj->secondFunction("Person");
echo $obj->ab();
echo $obj->cd();
