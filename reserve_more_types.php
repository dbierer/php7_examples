<?php 
// data types now reserved

// works OK in php 5.x
class string
{
    public $test = "Works in PHP 5.x\n";
}

$a = new string();
echo $a->test;

// let's have some fun ...
// NOTE: this trick no longer works in PHP 7!

function test(string $a)
{
    return strtoupper($a);
}

echo test('this is a test');
echo PHP_EOL;
