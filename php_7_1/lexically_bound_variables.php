<?php
// Lexically bound variables
// see: http://php.net/manual/en/migration71.incompatible.php


// use of any Super Globals not allowed
$remote = function () use ($_SERVER) { return $_SERVER['REMOTE_ADDR']; };
$ip = $remote();

// cannot reuse names of params
$ipCheck = function ($ip) use ($ip) { 
    $check = 0;
    foreach (explode('.', $ip) as $part) {
        if ($part >= 0 && $part < 255) {
            $check++;
        }
    }
    return $check == 4;
};

echo 'IP Address: ' . $ip . ' ';
echo ($ipCheck($ip)) ? 'is Valid' : 'is Not Valid';
echo PHP_EOL;

// PHP 7.1: 
/*
Fatal error: Cannot use auto-global as lexical variable in ...
Fatal error: Cannot use lexical variable $p as a parameter name in ...
*/

// PHP 5:  IP Address: 127.0.0.1 is Valid
