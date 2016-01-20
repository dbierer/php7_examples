<?php
// foreach by reference over arrays

echo "current()\n";
echo "-----------------\n";

// same in PHP 5 and PHP 7
$a = [1,2,3];
foreach($a as &$v) {
    printf("%2d - %2d\n", $v, current($a));
}

echo PHP_EOL;
echo "next()\n";
echo "----------------\n";

$a = [1, 2, 3, 4];
// after modification, internal foreach() pointer is restored
// same in PHP 5 and 7
foreach ($a as $v) {
    printf("%2d -\n", $v);
    next($a);
    var_dump(current($a));
    echo PHP_EOL;
}

echo PHP_EOL;
echo "unset()\n";
echo "----------------\n";

$a = [1, 2, 3];
// deletion of the next element referred by foreach pointer leads to skipping it
// same in PHP 5 and 7
foreach($a as &$v) {
    printf("%2d -\n", $v);
    unset($a[1]);
}


echo PHP_EOL;
echo '$a[] = 2' . PHP_EOL;
echo "----------------\n";

$a = [1, 2];
// adding new elements after the current foreach pointer adds them to iteration
// same in PHP 5 and 7
foreach($a as &$v) {
    printf("%2d -\n", $v);
    $a[2] = 3;
}

echo PHP_EOL;
echo '$a[1] = 2' . PHP_EOL;
echo "----------------\n";

// adding new elements after the current foreach pointer when we are already at the end
// adds them to iteration as well (this didn't work in PHP5)
$a = [1];
foreach($a as &$v) {
    printf("%2d -\n", $v);
    $a[1]=2;
}


echo PHP_EOL;
echo '$a = $b' . PHP_EOL;
echo "----------------\n";

// Replacing iterated array with another array lead to continue iteration over the new array
// starting from its internal pointer (the same as in PHP5)
$a = [1,2];
$b = [3,4];
next($b);
foreach($a as &$v) {
    echo "$v\n";
    $a = $b;
}


echo PHP_EOL;
echo 'array_pop()' . PHP_EOL;
echo "----------------\n";

// Modification of array, iterated through foreach by reference, using internal functions
// like array_pop(), array_push(), array_shift(), array_unshift() works consistently.
// These functions preserve the current foreach position or move it to the following element,
// if the current is deleted. (It didn't work in PHP5)
$a=[1,2,3,4];
foreach($a as &$v) {
    echo "$v\n";
    array_pop($a);
}
