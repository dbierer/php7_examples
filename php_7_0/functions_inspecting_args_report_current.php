<?php
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Other backward incompatible changes | Functions inspecting arguments report the current parameter value

error_reporting(E_ALL);

function foo($x) {
    $x++;
    var_dump(func_get_arg(0));
}
foo(1);

// PHP 5: int(1)
// PHP 7: int(2)

