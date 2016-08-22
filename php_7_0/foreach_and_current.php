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

/*
 * X-Powered-By: PHP/5.5.30
Content-type: text/html

BEFORE assignment
-----------------
 1 -  2
 2 -  2
 3 -  2

AFTER assignment
----------------
 1 -  1
 2 -  1
 3 -  1

PHP 7.0
* BEFORE assignment
-----------------
 1 -  1
 2 -  1
 3 -  1

AFTER assignment
----------------
 1 -  1
 2 -  1
 3 -  1
*/
