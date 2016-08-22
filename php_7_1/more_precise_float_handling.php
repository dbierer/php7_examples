<?php
// https://wiki.php.net/rfc/precise_float_value
echo "\n--------------------------------------\n";
$j = '{ "v": 0.1234567890123456789 }';
var_dump(json_decode($j));
var_dump(json_encode(json_decode($j)));
ini_set('precision', 20);
var_dump(json_decode($j));
var_dump(json_encode(json_decode($j)));
var_dump(0.1234567890123456789);

echo "\n--------------------------------------\n";
$v = 0.12345678901234567890;
var_dump($v);
ini_set('precision', 100);
var_dump($v);

echo "\n--------------------------------------\n";
$v = 10.0000000000001;

ini_set('precision', -1);
ini_set('serialize_precision', -1);

var_dump($v);
echo var_export($v, true), PHP_EOL;
echo json_encode($v), PHP_EOL;
echo $v, PHP_EOL;

