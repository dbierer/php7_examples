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
// Running PHP7: "Error: Call to a member function nope() on null"

// Catch Throwable if you want to trap Exceptions or Errors
try {
    do_something(null);
} catch (Throwable $e) {
    echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
}
