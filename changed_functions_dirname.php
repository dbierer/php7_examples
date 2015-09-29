<?php 
// dirname() now accepts a level argument

$dir = __DIR__;
echo $dir . PHP_EOL;
echo dirname($dir)    . PHP_EOL;  // default = 1
echo dirname($dir, 1) . PHP_EOL;
echo dirname($dir, 2) . PHP_EOL;
echo dirname($dir, 3) . PHP_EOL;
