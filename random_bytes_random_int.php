<?php

// random_bytes(int length);
$randomStr = random_bytes(16);

// random_int(int min, int max);
$randomInt = random_int(0, 127);

// output
$str = '';
$hex = '';
for ($x = 0; $x < strlen($randomStr); $x++) {
	$str .= (ctype_print($randomStr[$x])) ? $randomStr[$x] : '.';
	$hex .= sprintf('%02x ', ord($randomStr[$x]));
} 
echo $str . ' : ' . $hex . PHP_EOL;
echo "Random Int: $randomInt\n";
