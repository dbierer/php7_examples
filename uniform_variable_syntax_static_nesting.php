<?php
// TODO: stack up constants too?

class Test
{
    const SOMETHING = 'something';
    public static $test = 'Static Property: Works in PHP7';
    public static function baz()
    {
        return 'Static Method: Works in PHP7';
    }
}

class Foo
{
    public static $test = 'Test';
    public function bar()
    {
        return self::$test;
    }
}

// works in PHP 5 or 7
echo Foo::$test;
echo PHP_EOL;

// starting here, will generate a parse error in PHP 5.x
echo Foo::$test::$test;
echo PHP_EOL;

$foo['bar'] = 'Test';
echo $foo['bar']::$test;
echo PHP_EOL;

$foo = new Foo();
echo $foo->bar()::baz();
echo PHP_EOL;
