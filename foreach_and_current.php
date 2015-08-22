<?php
// foreach behavior

echo "BEFORE assignment\n";
echo "-----------------\n";

// array pointer gets set to 2nd element
$a = [1, 2, 3];
foreach ($a as $v) {
	printf("%2d - %2d\n", $v, current($a));
}

echo PHP_EOL;
echo "AFTER assignment\n";
echo "----------------\n";

$a = [1, 2, 3];
// array pointer gets set to 1st element
$b = $a;
foreach ($a as $v) {
	printf("%2d - %2d\n", $v, current($a));
}

