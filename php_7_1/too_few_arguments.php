<?php
// how it works in php 5 + 7:
/*
function foo($a) {
   var_dump($a);   // NULL + Warning: Undefined variable: a
   var_dump($a);   // NULL + Warning: Undefined variable: a
}
foo();             // Warning: Missing argument 1 for foo()
*/
// throws error in PHP 7.1
function foo($a) {
   var_dump($a);   // not executed
   var_dump($a);   // not executed
}
foo();             // throw Error("Too few arguments to function foo(), 0 passed in %s on line %d and exactly 1 expected")
