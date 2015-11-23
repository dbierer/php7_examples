<?php
// jsond vs. json extension

$raw1 = (float) 100;
$raw2 = (float) 100.01;
echo "Raw values\n";
var_dump($raw1, $raw2);
$json1 = json_encode($raw1);
$json2 = json_encode($raw2);
echo "Json encoded\n";
var_dump($json1, $json2);
echo PHP_EOL;
echo "Json decoded\n";
var_dump(json_decode($json1), json_decode($json2));
echo PHP_EOL;

// https://wiki.php.net/rfc/json_preserve_fractional_part
// // Currently
echo json_encode(10.0); // Output 10
echo PHP_EOL;
echo json_encode(10.1); // Output 10.1
echo PHP_EOL;
var_dump(json_decode(json_encode(10.0))); // Output int(10)
var_dump(10.0 === json_decode(json_encode(10.0))); // Output bool(false)
echo PHP_EOL;
 
// Proposed
echo json_encode(10.0); // Output 10
echo PHP_EOL;
echo json_encode(10.1); // Output 10.1
echo PHP_EOL;
echo json_encode(10.0, JSON_PRESERVE_ZERO_FRACTION); // Output 10.0
echo PHP_EOL;
echo json_encode(10.1, JSON_PRESERVE_ZERO_FRACTION); // Output 10.1
echo PHP_EOL;
var_dump(json_decode(json_encode(10.0, JSON_PRESERVE_ZERO_FRACTION))); // Output double(10)
var_dump(10.0 === json_decode(json_encode(10.0, JSON_PRESERVE_ZERO_FRACTION))); // Output bool(true)
echo PHP_EOL;


