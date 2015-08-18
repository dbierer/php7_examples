<?php 
// callable is immediately executed in PHP 7

class Foo
{
    const FOO_FORMAT = 'Y-m-d H:i:s'; 
    public function bar()
    {
        return function () {
            $date = new DateTime('now');
            return $date->format(Foo::FOO_FORMAT) . PHP_EOL;
        };
    }
}

$foo = new Foo();
// php 5.x
$callable = $foo->bar();
echo $callable();
// php 7
echo $foo->bar()();
