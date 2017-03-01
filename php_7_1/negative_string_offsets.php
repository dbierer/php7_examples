<?php
// see: http://php.net/manual/en/migration71.new-features.php

var_dump("abcdef"[-2]);
var_dump(strpos("aabbcc", "b", -3));

/*
The above example will output:
string (1) "e"
int(3)
*/

// Negative string and array offsets are now also supported in the simple variable parsing syntax inside of strings.
$string = 'bar';
echo "The last character of '$string' is '$string[-1]'.\n";

