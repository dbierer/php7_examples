<?php
// generator calls "sub" generators using "yield from"

function foo() {
	yield 1;
	yield from [2,3,4];
	yield 5;
}
function bar() {
	yield 'A';
	yield from ['B','C','D'];
	yield 'E';
	// never gets returned in this example
	return 42;		
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
