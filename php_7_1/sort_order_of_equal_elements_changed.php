<?php
// Sort order of equal elements 
// see: http://php.net/manual/en/migration71.incompatible.php

$a = ['num_1' => 'A', 'num_2' => 'B', 'num_3' => 'A', 'num_4' => 'C', 'num_5' => 'A'];
echo "\nBefore Sort:\n";
var_dump($a);
asort($a);
echo "\nAfter Sort:\n";
var_dump($a);
