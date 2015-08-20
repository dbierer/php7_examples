<?php 
// changes to list()

list($array[], $array[], $array[]) = [1, 2, 3];

// OLD: $array = [3, 2, 1]
// NEW: $array = [1, 2, 3]

try {
    list() = $a;           // INVALID
} catch (\Error $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
	var_dump($array);
}

try {
    list($b, list()) = $a; // INVALID
} catch (\Error $e) {
    echo $e->getMessage() . PHP_EOL;
}

/*
try {
    foreach ($a as list()) // INVALID (was also invalid previously)
} catch (\Error $e) {
    echo $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
*/


