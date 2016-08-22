<?php
// list() and [] usages are equivalent to each other

echo "\nExample 1:\n";
list($a, $b, $c) = array(1, 2, 3);
var_dump($a, $b, $c);
echo PHP_EOL;

[$a, $b, $c] = [1, 2, 3];
var_dump($a, $b, $c);
echo PHP_EOL;

echo "\nExample 2:\n";
list("a" => $a, "b" => $b, "c" => $c) = array("a" => 1, "b" => 2, "c" => 3);
var_dump($a, $b, $c);
echo PHP_EOL;

["a" => $a, "b" => $b, "c" => $c] = ["a" => 1, "b" => 2, "c" => 3];
var_dump($a, $b, $c);
echo PHP_EOL;

echo "\nExample 3:\n";
list($a, $b) = array($b, $a);
var_dump($a, $b, $c);
echo PHP_EOL;

[$a, $b] = [$b, $a];
var_dump($a, $b, $c);
echo PHP_EOL;
