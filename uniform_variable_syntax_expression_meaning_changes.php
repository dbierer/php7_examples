<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
$$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
$foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
$foo->$bar['bat']()     $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
Foo::$bar['ban']()      Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
*/

$abc = 'ABC';
$foo['bar']['baz'] = 'abc';

// old meaning            // new meaning
// ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
echo $$foo['bar']['baz'];
echo PHP_EOL;

class Foo
{
	public $test  = ['bar' => 'test1', 'baz' => 'test2'];
	public $test1 = 'TEST1';
	public $test2 = 'TEST2';
	public $test3 = 'TEST3';
	public function test4()
	{
		return function () { return 'TEST4'; };
	}
	public static function test5()
	{
		return function () { return 'TEST5'; };
	}
}

$bar = ['baz' => 'test3', 'bat' => 'test4', 'ban' => 'test5'];
$foo = new Foo();

// old meaning            // new meaning
// $foo->{$bar['baz']}       ($foo->$bar)['baz']
//echo $foo->$bar['baz'];
echo $foo->$bar['baz'];
echo PHP_EOL;

// old meaning            // new meaning
// $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
try {
	echo $foo->$bar['bat']();
} catch (Exception $e) {
	echo $e->getMessage();
}
echo PHP_EOL;

// old meaning            // new meaning
// Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
echo Foo::$bar['ban']();
