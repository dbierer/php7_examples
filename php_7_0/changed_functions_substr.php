<?php 
// substr() changes: 
// if 2nd param == strlen($a)
// --> php 5 returns FALSE
// --> php 7 returns ""
 
$a = '0123456789';
$b = substr($a, 10);
var_dump($b);           

// Possible BC break: if you do something like this:
if (substr($a, 10) === FALSE) {
    echo 'This is what PHP 5 will echo' . PHP_EOL;
} elseif (substr($a, 10) === '') {
    echo 'This is what PHP 7 will echo' . PHP_EOL;
}
