<?php
// will now produce the following errors:
/*
Notice: A non well formed numeric string encountered in example.php on line XXX
Notice: A non well formed numeric string encountered in example.php on line XXX
*/

$numberOfApples = "10 apples" + "5 pears";
var_dump($numberOfApples);

// Similarly, this code:

$numberOfPears = 5 * "orange";
var_dump($numberOfPears);
