<?php 
// changes to list()

list($array[], $array[], $array[]) = [1, 2, 3];

// OLD: $array = [3, 2, 1]
// NEW: $array = [1, 2, 3]

var_dump($array);
