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
echo "\nThis is how you can test to see if it's a hex numeric string:\n";
$hex = filter_var('0x123', FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);
var_dump($hex);
echo PHP_EOL;

// is_numeric()
$str = '0x123';
if (!is_numeric($str)) {
    throw new Exception('Not a number');
}
echo PHP_EOL;

// other examples from http://php.net/manual/en/migration70.incompatible.php
echo 'var_dump("0xe" + "0x1")' . PHP_EOL;
var_dump("0xe" + "0x1");
echo 'var_dump(substr("foo", "0x1"))' . PHP_EOL;
var_dump(substr("foo", "0x1"));
