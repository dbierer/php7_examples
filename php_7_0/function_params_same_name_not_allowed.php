<?php
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Other backward incompatible changes | Calls from incompatible context removed

error_reporting(E_ALL);

// Does this really work in PHP 5???
function foo($a, $b, $unused, $unused) {
    echo "\$a = $a | \$b = $b | \$unused = $unused\n";
}

foo(1,2,3,4);

// PHP 5: $a = 1 | $b = 2 | $unused = 4
// PHP 7: Fatal error: Redefinition of parameter $unused in ...

