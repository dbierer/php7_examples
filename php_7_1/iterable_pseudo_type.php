<?php
// see https://wiki.php.net/rfc/iterable
function foo(iterable $iterable) {
    echo __FUNCTION__ . PHP_EOL;
    foreach ($iterable as $value) {
        echo $value . ' ';
    }
}
echo "\nfoo([1,2,3])\n";
foo([1,2,3]);

echo "\nfoo(new ArrayIterator([1,2,3]))\n";
foo(new ArrayIterator([1,2,3]));

echo "\nis_iterable() examples\n";
var_dump(is_iterable([1, 2, 3])); // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3]))); // bool(true)
var_dump(is_iterable((function () { yield 1; })())); // bool(true)
var_dump(is_iterable(1)); // bool(false)
var_dump(is_iterable(new stdClass())); // bool(false)

echo "\nIs supposed to work but doesn't\n";
echo 'See: https://wiki.php.net/rfc/iterable' . PHP_EOL;

interface Example {
    public function foo(array $array): iterable;
}

class ExampleImplementation implements Example {
    public function foo(iterable $iterable) {
        echo __METHOD__ . PHP_EOL;
        foreach ($iterable as $value) {
            echo $value . ' ';
        }
    }
}

echo "\nnew ExampleImplementation(new ArrayIterator([1,2,3])) works OK\n";
$e = new ExampleImplementation();
$e->foo(new ArrayIterator([1,2,3]));
echo PHP_EOL;


