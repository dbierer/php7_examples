<?php

// Integers
echo 1 <=> 1; // 0
echo PHP_EOL;
echo 1 <=> 2; // -1
echo PHP_EOL;
echo 2 <=> 1; // 1
echo PHP_EOL;
 
// Floats
echo 1.5 <=> 1.5; // 0
echo PHP_EOL;
echo 1.5 <=> 2.5; // -1
echo PHP_EOL;
echo 2.5 <=> 1.5; // 1
echo PHP_EOL;
 
// Strings
echo "a" <=> "a"; // 0
echo PHP_EOL;
echo "a" <=> "b"; // -1
echo PHP_EOL;
echo "b" <=> "a"; // 1
echo PHP_EOL;
 
echo "a" <=> "aa"; // -1
echo PHP_EOL;
echo "zz" <=> "aa"; // 1
echo PHP_EOL;
 
// Arrays
echo [] <=> []; // 0
echo PHP_EOL;
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo PHP_EOL;
echo [1, 2, 3] <=> []; // 1
echo PHP_EOL;
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo PHP_EOL;
echo [1, 2, 3] <=> [1, 2, 4]; // -1
echo PHP_EOL;
 
// Objects
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 0
echo PHP_EOL;
 
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "c"]; 
echo $a <=> $b; // -1
echo PHP_EOL;
 
$a = (object) ["a" => "c"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 1
echo PHP_EOL;
 
// only values are compared
$a = (object) ["a" => "b"]; 
$b = (object) ["b" => "b"]; 
echo $a <=> $b; // 0
echo PHP_EOL;
