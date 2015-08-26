<?php

// Was: int(-9223372036854775808)
// Now: int(0)
var_dump((int)NAN);

// Was: int(-9223372036854775808)
// Now: int(0)
var_dump((int)INF);

// Was: int(4611686018427387904)
// Now: bool(false) and E_WARNING
try {
    var_dump(1 << -2);
} catch (ArithmeticError $e) {
	echo 'ERROR: ' . $e->getMessage() . PHP_EOL;
}

// Was: int(8)
// Now: int(0)
var_dump(8 >> 64);
