<?php 
// improved sort algorithm
// Possible BC break: mixed data types can yield different results
// PHP 5: array(6) {[0]=> string(1) "4", [1]=> int(4), [2]=> string(1) "5", [3]=> int(5)}
// PHP 7: array(6) {[0]=> int(4), [1]=> string(1) "4", [2]=> int(5), [3]=> string(1) "5"}

$a = [4, 5, '4', '5'];

sort($a);
var_dump($a);

