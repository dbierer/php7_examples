<?php
// example of the effect of the abstract syntax tree rework

class Test
{
    public function __clone()
    {
        echo __METHOD__;
    }
}

$a = new Test();
$b = clone $a;

// fails in php 5.x
$a->__clone();
