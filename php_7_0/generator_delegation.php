<?php
// generator calls "sub" generators using "yield from"

function foo() {
	yield 1;
	yield 2;
	yield 3;
}
function bar() {
	yield 'A';
	yield 'B';
	yield 'C';
}
function both() {
	yield from foo();
	yield from bar();
	yield 'DONE';
}

$a = both();

foreach ($a as $value) {
	echo "$value\n";
}
