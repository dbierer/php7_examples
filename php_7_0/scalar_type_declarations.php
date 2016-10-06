<?php
// type declarations: accepts only float; returns only int

function add(float $a, float $b): int {
    return $a + $b;
}

try {
    var_dump(add(1.6, 2.6)); // int(4)
    // Notice: A non well formed numeric value encountered
    var_dump(add("1 foo", "2")); // int(3)
    add(1, 2); // Fatal error: Argument 1 passed to add() must be of the type float, integer given
} catch (\Error $e) {
    echo "Error: {$e->getMessage()}\n";
}
