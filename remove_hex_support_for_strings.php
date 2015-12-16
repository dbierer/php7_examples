<?php
// remove hex support for strings

// direct type case
var_dump((int)   '0x123'); // int(0)
var_dump((float) '0x123'); // float(0)
echo PHP_EOL;

// Exception not thrown, instead wrong result is generated here:
$n = (int) $str; // 0

// Loose equality comparison
var_dump('0x123' == '291');             // TRUE
var_dump((int) '0x123' == (int) '291'); // FALSE
echo PHP_EOL;

// testing
$hex = filter_var('0x123', FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);
var_dump($hex);
echo PHP_EOL;

// is_numeric()
$str = '0x123';
if (!is_numeric($str)) {
    throw new Exception('Not a number');
}
echo PHP_EOL;

