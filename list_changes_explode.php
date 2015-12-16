<?php
// TODO: test list() with explode()

$string = 'TEST1 TEST2 TEST3';
list($a, $b, $c) = explode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b) = explode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b, $c, $d) = explode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;

list($a, $b, $c, $d, $e) = explode(' ', $string);
var_dump($a, $b, $c, $d);
echo PHP_EOL;
