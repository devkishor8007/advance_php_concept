<?php
//  first way to use constant 
define('INTRO', 'kishor<hr>');
define('COLOR', 'The color is Green<hr>');
define('LIFESPAN', '1.2');
echo INTRO;
echo COLOR;
echo "The lifespan of product is " . LIFESPAN . ' years.<hr>';

//  second way to use constant 
const NAME_CON = 'This is demo name<hr>';
echo NAME_CON;

const AGE = 10;
echo AGE;
