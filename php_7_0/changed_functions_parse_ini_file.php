<?php
// parse_ini_file() now allows you to specify data types
// NOTE: also available in PHP 5.6.1

$test = parse_ini_file('parse_ini_file_test.ini', FALSE, INI_SCANNER_TYPED);
var_dump($test);
