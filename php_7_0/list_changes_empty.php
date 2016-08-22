<?php 
// changes to list()

list() = $a;           
list(,,) = $a;
list($x, list(), $y) = $a;
list($b, list()) = $a; 

var_dump($x, $b);

/*
try {
    foreach ($a as list()) // INVALID (was also invalid previously)
} catch (\Error $e) {
    echo $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
*/


