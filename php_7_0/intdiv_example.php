<?php 
// new function to perform integer division
// see: https://wiki.php.net/rfc/intdiv

// in PHP 5:
var_dump((int) (999 / 14));

// in PHP 7:
var_dump(intdiv(999, 14));

// NOTE: %% operator was suggested, but voted down
// Example 1: var_dump(999 %% 14);
// Example 2: $a = 999; $a %%= 14;
