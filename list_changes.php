<?php 
// changes to list()

// OLD: $array = [3, 2, 1]
// NEW: $array = [1, 2, 3]
list($array[], $array[], $array[]) = [1, 2, 3];
var_dump($array);

// OLD: $a = 1, $b = 2
// NEW: $a = 1, $b = null + "Undefined index 1"
$a = [1, 2];
list($a, $b) = $a;
var_dump($a, $b);
 
 
// OLD: $a = null + "Undefined index 0", $b = 2
// NEW: $a = 1, $b = 2
$b = [1, 2];
list($a, $b) = $b;
var_dump($a, $b);
