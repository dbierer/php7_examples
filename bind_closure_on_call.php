<?php

$a = function () { return $this->x; };
class FooBar { private $x = 3; }
$foobar = new FooBar;

echo "Using bindTo()\n";
$start = microtime(TRUE);
for ($i = 0; $i < 1000000; $i++) {
    $x = $a->bindTo($foobar, "FooBar");
    $x();
}

$stop = microtime(TRUE);
printf("\nStart:  %.8f\nStop:   %.8f\nElapsed: %.8f\n", $start, $stop, $stop - $start);

echo "\nUsing call()\n";
$start = microtime(TRUE);
for ($i = 0; $i < 1000000; $i++) {
    $a->call($foobar);
}
$stop = microtime(TRUE);
printf("\nStart:  %.8f\nStop:   %.8f\nElapsed: %.8f\n", $start, $stop, $stop - $start);
