<?php 
// changes to list()

foreach (range(0, 2) as $key) {
	$array[$key] = range('A', 'C');
}

list(list($a, $b, $c, $d, $e)) = $array;

var_dump($array);
var_dump($a, $b);
 
// OLD:
//$b = $array[0][1];
//$a = $array[0][0];
 
// NEW:
//$_tmp = $array[0];
//$a = $_tmp[0];
//$b = $_tmp[1];
