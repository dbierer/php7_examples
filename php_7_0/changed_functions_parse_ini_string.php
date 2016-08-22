<?php
// NOTE: also affects parse_ini_file()
// in PHP 5 returns: 1, 2, 4, 4
// in PHP 7 will trigger an E_COMPILE_ERROR

$ini = <<<TAG
# This is a comment in PHP 5
; This is a comment in PHP 5 or 7
[params]
param.1 = 1
param.2 = 2
param.3 = 3
[other]
other.1 = 1
other.2 = 2
other.3 = 3
TAG;

var_dump(parse_ini_string($ini, TRUE));
