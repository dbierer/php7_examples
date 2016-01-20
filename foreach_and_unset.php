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

/*
PHP 5.6
BEFORE assignment
-----------------
 1
 2
 3
array(2) {
  [0]=>
  int(1)
  [2]=>
  int(3)
}

AFTER assignment
----------------
 1
 3
array(2) {
  [0]=>
  int(1)
  [2]=>
  int(3)
}

PHP 7.0
BEFORE assignment
-----------------
 1
 2
 3
array(2) {
  [0] =>
  int(1)
  [2] =>
  int(3)
}

AFTER assignment
----------------
 1
 2
 3
array(2) {
  [0] =>
  int(1)
  [2] =>
  int(3)
}
*/

