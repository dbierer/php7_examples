<?php
// throwable interface demo

function do_something($obj) {
    $obj->nope();
}

try {
    do_something(null); // in PHP 5.x: oops!
} catch (\Error $e) {
    echo "Error: {$e->getMessage()}\n";
}
    
