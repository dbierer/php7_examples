<?php
// division by zero 
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Changes to Division By Zero

try {
    var_dump(3/0);
    var_dump(0/0);
    var_dump(0%0);
} catch (Error $e) {
    echo get_class($e) . ':' . $e->getMessage();
}

// PHP 5 output: 
/*
Warning:  Division by zero in ...
bool(false)
*/

// PHP 7 output:
/*
Warning: Division by zero in ...
float(INF)
Warning: Division by zero in ...
float(NAN)
DivisionByZeroError:Modulo by zero
*/
