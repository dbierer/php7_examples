<?php
// in PHP 5 returns: 1, 2, 4, 4
// in PHP 7 will trigger an E_COMPILE_ERROR

function foo($a, $b, $unused, $unused) {
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
    echo $unused . PHP_EOL;
    echo $unused . PHP_EOL;
}

foo(1,2,3,4);
