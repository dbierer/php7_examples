<?php
// foreach behavior

echo "BEFORE assignment\n";
echo "-----------------\n";

$a = [1, 2, 3];
foreach ($a as $v) {
	printf("%2d\n", $v);
	unset($a[1]);
}
var_dump($a);

echo PHP_EOL;
echo "AFTER assignment\n";
echo "----------------\n";

$a = [1, 2, 3];
// array pointer gets set to 1st element
$b = &$a;
foreach ($a as $v) {
	printf("%2d\n", $v);
	unset($a[1]);
}
var_dump($a);

