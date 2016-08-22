<?php
// functions expecting integers might silently truncate values

$float = 9223372036854775807 * (22/7);
var_dump($float);
echo decbin($float);
echo PHP_EOL;
echo bindec(decbin($float));

