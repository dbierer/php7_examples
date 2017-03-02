<?php
// Silently truncated in PHP 5
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Changes to integer handling : Invalid Octal Literals


error_reporting(E_ALL);

$goodOctal = 0123;
echo "\nGood Octal: $goodOctal\n";  // 83 in both PHP 5 and PHP 7

$badOctal = 0128;
echo "\nBad Octal: $badOctal\n";  // 10 in PHP 5; Parse Error in PHP 7
