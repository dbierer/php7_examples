<?php

$obj1 = new stdClass();
$obj1->name = 'Joe';
$obj2 = new stdClass();
$obj2->name = 'Fred';

echo [$obj1, $obj2][0]->name;
