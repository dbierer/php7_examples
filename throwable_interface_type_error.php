<?php
// throwable interface: TypeError
// TODO:
// from Chris Langton to All Participants:
// declaring a class name again cant be caught it seems

function add(int $left, int $right) {
    return $left + $right;
}

try {
    echo add('left', 'right');
} catch (TypeError $e) {
    // Log error and end gracefully
    echo 'Error: did not supply the correct type!';
} catch (Exception $e) {
    // Handle any exceptions
    echo 'Unknown Error';
}
echo PHP_EOL;
