<?php
// TODO: see wuzzup!
// example of the effect of the abstract syntax tree rework

$foo_1 = array();
$foo_2 = array();

$foo_2['bar'] = 'baz';
var_dump($foo_2);

($foo_1)['bar'] = 'baz';
var_dump($foo_1);

class Test
{
    public function bar()
    {
        return "TEST\n";
    }
}

// conventional syntax
$t = new Test();
echo $t->bar();

// introduced in PHP 5.4
echo (new Test())->bar();

// php 7
echo new Test()->bar();

