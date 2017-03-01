<?php
// will now produce a Warning:
// Notice: A non well formed numeric value encountered on line XXX
error_reporting(E_ALL);

// Notice produced
echo "\nNotice Produced:\n";
$volume = '10cm high' * '5cm wide';
echo 'Line: ' . __LINE__ . '  Value :' . var_export($volume, true);
echo PHP_EOL;

// Similarly, this code:
echo "\nProduces Warning:\n";
$numberOfPears = 5 * 'orange';
echo 'Line: ' . __LINE__ . '  Value :' . var_export($numberOfPears, true);
echo PHP_EOL;

// this doesn't produce any errors:
echo "\nNo Warning Produced:\n";
$numberOfApples = (int) '10 apples' + (int) '5 pears';
var_dump($numberOfApples); 
