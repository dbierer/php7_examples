<?php
// list behavior inconsistency
// normally list() is not used with strings ... but ...

list($a, $b) = 'AB';
var_dump($a, $b);
echo PHP_EOL;

list($a, $b) = "AB";
var_dump($a, $b);
echo PHP_EOL;

$c[0] = 'AB';
list($a, $b) = $c[0];
var_dump($a, $b);
echo PHP_EOL;

