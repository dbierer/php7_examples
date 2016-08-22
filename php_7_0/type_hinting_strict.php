<?php
// shows basic type hinting for scalars

// this line has to be enabled for type hinting to work!
// must be the 1st line (well ... after comments anyhow)
declare(strict_types=1);

// NOTE: can't be done globally ... unless you're willing to fool around with
//       the "auto_prepend_file" php.ini setting, and add something like this:
//       <?php declare(strict_types=1); ? >

// you can also type hint the return type!
function add(float $a, float $b): float
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

