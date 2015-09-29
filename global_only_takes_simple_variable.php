<?php
// globals now only accept simple variables
// it is now required to write the following: global ${$foo->bar};

$test = 'VALUE DOES NOT CHANGE IN PHP 7';

class Foo
{
    public $bar  = 'test';
}

function test()
{
    $foo = new Foo();
    global $$foo->bar;
    $test = 'THIS WORKS IN PHP 5';
}

test();

echo $test;
