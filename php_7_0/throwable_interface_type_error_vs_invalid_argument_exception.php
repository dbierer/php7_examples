<?php
// throwable interface: TypeError vs. InvalidArgumentException

function add($left, $right) {
	if (is_numeric($left) && is_numeric($right)) {
		return $left + $right;
	} else {
		throw new InvalidArgumentException('Input arguments non-numeric');
	}
}

function addWithHint(int $left, int $right) {
    return $left + $right;
}


try {
    echo add('left', 'right');
} catch (InvalidArgumentException $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (TypeError $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (Exception $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
}
echo PHP_EOL;

try {
    echo addWithHint('left', 'right');
} catch (InvalidArgumentException $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (TypeError $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (Exception $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
}
echo PHP_EOL;

try {
    echo (new DateTime('now'))->add('P4D')->format('Y-m-d H:i:s');
} catch (InvalidArgumentException $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (TypeError $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (Error $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
} catch (Exception $e) {
    // Log error and end gracefully
    echo "\nERROR: {$e->getMessage()}\n";
}
echo PHP_EOL;

