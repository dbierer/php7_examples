<?php 
// changes to list()

foreach (range('A', 'C') as $key) {
	$array[$key] = range(1, 3);
}

list(list($a, $b)) = $array;

var_dump($array);
var_dump($a, $b);
 
// OLD:
//$b = $array[0][1];
//$a = $array[0][0];
 
// NEW:
//$_tmp = $array[0];
//$a = $_tmp[0];
//$b = $_tmp[1];
