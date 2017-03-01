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

echo "\nis_iterable() examples";
echo PHP_EOL . __LINE__ . ':' . var_export(is_iterable([1, 2, 3]), true); // bool(true)
echo PHP_EOL . __LINE__ . ':' . var_export(is_iterable(new ArrayIterator([1, 2, 3])), true); // bool(true)
echo PHP_EOL . __LINE__ . ':' . var_export(is_iterable((function () { yield 1; })()), true); // bool(true)
echo PHP_EOL . __LINE__ . ':' . var_export(is_iterable(1), true); // bool(false)
echo PHP_EOL . __LINE__ . ':' . var_export(is_iterable(new stdClass()), true); // bool(false)

echo "\nGoing from iterable to array Works OK\n";
interface Example1 {
    public function foo(iterable $array): iterable;
}

class ExampleImplementation1 implements Example1 {
    public function foo(array $iterable) {
        echo __METHOD__ . PHP_EOL;
        foreach ($iterable as $value) {
            echo $value . ' ';
        }
    }
}

$e = new ExampleImplementation1();
$e->foo([1,2,3]);
echo PHP_EOL;

echo "\nGoing from array to iterable doesn't work\n";
echo 'See: https://wiki.php.net/rfc/iterable' . PHP_EOL;

interface Example2 {
    public function foo(array $array): iterable;
}

class ExampleImplementation2 implements Example2 {
    public function foo(iterable $iterable) {
        echo __METHOD__ . PHP_EOL;
        foreach ($iterable as $value) {
            echo $value . ' ';
        }
    }
}

echo "\nnew ExampleImplementation(new ArrayIterator([1,2,3])) works OK\n";
$e = new ExampleImplementation2();
$e->foo(new ArrayIterator([1,2,3]));
echo PHP_EOL;
