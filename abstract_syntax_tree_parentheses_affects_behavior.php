<?php
// example of the effect of the abstract syntax tree rework

$foo_1 = array();
$foo_2 = array();

$foo_2['bar'] = 'baz';
var_dump($foo_2);

($foo_1)['bar'] = 'baz';
var_dump($foo_1);

