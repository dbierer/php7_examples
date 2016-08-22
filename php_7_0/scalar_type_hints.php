<?php
declare(strict_types=1);
 
function add(float $a, float $b): float {
    return $a + $b;
}

// The one exception is that widening primitive conversion is allowed for int to float. 
// This means that parameters that declare float can also accept int. 
var_dump(add(1, 2)); // float(3)

function test(int $i, float $f, string $s, bool $b): array {
	return [$i, $f, $s, $b];
}

// works OK
var_dump(test(1, 22/7, 'TEST', TRUE));

// throws error
try {
	var_dump(test('TEST', TRUE, 1, 22/7));
} catch (Error $e) {
	echo 'ERROR: ' . $e;
}

 
