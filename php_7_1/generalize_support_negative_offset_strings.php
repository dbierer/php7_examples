<?php
$str = '123123123123';
echo "substr() w/ negative offset\n";
echo substr($str, -6, -3);
echo PHP_EOL;

echo "\nsubstr_count() w/ negative offset\n";
echo (substr_count($str, '123', -6));
echo PHP_EOL;

echo "\nstrrpos() w/ negative offset\n";
echo (strrpos($str, '123', -3)) ? 'FOUND' : 'NOT';
echo PHP_EOL;

echo "\nstrpos() w/ negative offset\n";
echo (strpos($str, '123', -3)) ? 'FOUND' : 'NOT';
echo PHP_EOL;

// also added:

echo PHP_EOL;
var_dump($str[-2]); // => string(1) "e"
echo PHP_EOL;

$str{-3}='.';
var_dump($str);		// => string(6) "abc.ef"
echo PHP_EOL;

var_dump(isset($str{-4}));	// => bool(true)
echo PHP_EOL;

var_dump(isset($str{-10}));	// => bool(false)
echo PHP_EOL;
