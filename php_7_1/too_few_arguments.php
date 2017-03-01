<?php
// see: https://wiki.php.net/rfc/too_few_args
// how it works in php 5.6:
/*
Warning: Missing argument 1 for foo(), called in /home/fred/Desktop/Repos/php7_examples/php_7_1/too_few_arguments.php on line 15 
and defined in /home/fred/Desktop/Repos/php7_examples/php_7_1/too_few_arguments.php on line 11
NULL
NULL
*/

// throws error in PHP 7.1:
/*
Fatal error: Uncaught ArgumentCountError: Too few arguments to function foo(), 
0 passed in /home/fred/Desktop/Repos/php7_examples/php_7_1/too_few_arguments.php on line 15 and 
exactly 1 expected in /home/fred/Desktop/Repos/php7_examples/php_7_1/too_few_arguments.php:11
 */

try {
    function foo($a) {
       echo __FUNCTION__ . PHP_EOL;
       var_dump($a);
       var_dump($a);
    }
    foo();
} catch (Error $e) {
    echo get_class($e) . ':' . __LINE__ . ':' . $e->getMessage() . PHP_EOL;
}

