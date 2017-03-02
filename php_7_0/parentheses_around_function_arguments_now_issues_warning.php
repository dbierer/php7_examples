<?php
// you used to get away with this in PHP 5
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Parentheses around function arguments no longer affect behaviour


error_reporting(E_ALL);

function getArray() 
{
    echo __FUNCTION__ . PHP_EOL;
    return [1, 2, 3];
}

function squareArray(array &$a) {
    echo __FUNCTION__ . PHP_EOL;
    foreach ($a as &$v) {
        $v **= 2;
    }
}

// Generates a Notice in PHP 7.1
squareArray((getArray()));
