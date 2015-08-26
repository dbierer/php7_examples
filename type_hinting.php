<?php
// shows basic type hinting for scalars

// this line has to be enabled for type hinting to work!
// declare(strict_types=1);

function add(float $a, float $b)
{
	return $a + $b;
}

// works OK
var_dump(add(1.5, 2.5));

// php 5.x ... works but gives NOTICE
// php 7 == Type Error
try {
	var_dump(add('1 FOO', '2'));
} catch (TypeError $e) {
	echo 'ERROR: ' . $e->getMessage() . PHP_EOL;
}
// uses "widening"
var_dump(add(1, 2));

