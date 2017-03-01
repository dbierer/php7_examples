<?php
// square bracket array syntax can now be used everywhere
// see: https://wiki.php.net/rfc/short_list_syntax

$array = ['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry'];
// doesn't work
echo "\nDoesn't work:\n";
list($a, $b, $c) = $array;
printf('%03d : a=%6s : b=%6s : c=%6s', __LINE__, $a, $b, $c);
echo PHP_EOL;

// As of the upcoming PHP 7.1, there will also be a syntax form for specifying keys when destructuring:
echo "\nWorks OK in 7.1:\n";
list('a' => $a, 'b' => $b, 'c' => $c) = $array;
printf('%03d : a=%6s : b=%6s : c=%6s', __LINE__, $a, $b, $c);
echo PHP_EOL;

// alternative syntax
echo "\nAlternate syntax:\n";
['a' => $a, 'b' => $b, 'c' => $c] = $array;
printf('%03d : a=%6s : b=%6s : c=%6s', __LINE__, $a, $b, $c);
echo PHP_EOL;

// also works in foreach() loop:
echo "\nWorks in foreach() too:\n";
$outer = [$array, $array, $array];
foreach ($outer as ['a' => $a, 'b' => $b, 'c' => $c]) {
    printf('%03d : a=%6s : b=%6s : c=%6s', __LINE__, $a, $b, $c);
    echo PHP_EOL;
}

// you also nest [] destructuring:
echo "\nReally out there:";
$reallyOutThere = [$outer, $outer, $outer];
foreach ($reallyOutThere as [['a' => $a, 'b' => $b, 'c' => $c], 
                             ['a' => $d, 'b' => $e, 'c' => $f], 
                             ['a' => $g, 'b' => $h, 'c' => $i]]) {
    printf("\n%03d : a=%6s : b=%6s : c=%6s", __LINE__, $a, $b, $c);
    printf("\n%03d : d=%6s : e=%6s : f=%6s", __LINE__, $d, $e, $f);
    printf("\n%03d : g=%6s : h=%6s : i=%6s", __LINE__, $g, $h, $i);
    echo PHP_EOL;
}

