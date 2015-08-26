<?php
// data type the return value

// NOTE: this works even if "declare(strict_types=1);" is missing!

function foo($a): array 
{
	return $a;
}

// these could be placed in try {} catch (TypeError $e) {}

var_dump(foo([1,2,3]));
var_dump(foo('test'));
