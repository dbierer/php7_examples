<?php
// jsond vs. json extension
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


