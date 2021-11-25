<?php

echo "Current line is " . __LINE__ . '<hr>';

echo "Current File Name is " . __FILE__ . '<hr>';

function one()
{
    echo "hello<hr>";
    echo "Current Function Name is " . __FUNCTION__ . '<hr>';
}

one();


// class magic constant  

class MagicClass
{
    public function mag()
    {
        echo "Hello Magic class<hr>";
        echo "The class " . __CLASS__ . '<hr>';
        echo "The method " . __METHOD__ . '<hr>';
    }
}

$magic = new MagicClass;
$magic->mag();
