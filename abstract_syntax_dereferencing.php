<?php
// example of PHP dereferencing

$a = [1,2,3];
$b = 'a';

// use $$
var_dump($$b);

// use {}
var_dump(${$b});

// in a function
function test()
{
    $a = array();
    for ($x = 0; $x < 3; $x++) {
        $a[] = $x;
    }
    return $a;
}

// available after php 5.4
echo test()[2];
