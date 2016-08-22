<?php 
// by-reference: left-to-right or right-to-left

$obj = new stdClass;
$obj->a = &$obj->b;
$obj->b = 1;
var_dump($obj);
/*
    // PHP 5.6 and below
    object(stdClass)#1 (2) {
    ["b"]=>
    &int(1)
    ["a"]=>
    &int(1)
    }
    
    // PHP7
    object(stdClass)#1 (2) {
    ["a"]=>
    &int(1)
    ["b"]=>
    &int(1)
    }
*/
