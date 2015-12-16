<?php
// TODO: test list() with explode()

$string = 'TEST1 TEST2 TEST3';
list($a, $b, $c) = expode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b) = expode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b, $c, $d) = expode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b, $c, $d, $e) = expode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;
