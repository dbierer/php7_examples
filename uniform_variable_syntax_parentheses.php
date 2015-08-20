<?php
// in php 5 parentheses affect behavior

$foo1 = array();
$foo2 = array();
 
($foo1)['bar'] = 'baz';
var_dump($foo1);

$foo2['bar'] = 'baz';
var_dump($foo2);
