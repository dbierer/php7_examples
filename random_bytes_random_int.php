<?php

echo '<pre>';
// random_bytes(int length);
$randomStr = random_bytes(16);

// output
$str = '';
$hex = '';
for ($x = 0; $x < strlen($randomStr); $x++) {
	$str .= (ctype_print($randomStr[$x])) ? $randomStr[$x] : '.';
	$hex .= sprintf('%02x ', ord($randomStr[$x]));
} 
echo $str . ' : ' . $hex . PHP_EOL;

$test = array();

printf("\n%20s : %20s\n", 'random_int()', 'rand()'); 
for ($x = 0; $x < 20; $x++) {
	// random_int(int min, int max);
	printf("%20d : %20d\n", random_int(0, 127), rand(0, 127));
}

echo '</pre>';
