<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
1: $$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
2: $foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
3: $foo->$bar['bat']()     $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
4: Foo::$bar['ban']()      Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
*/

function calledInPhp7()
{
	return 'Works in PHP7';
}

class Foo
{
	public $test  = ['bat' => 'calledInPhp7'];
	public static function calledInPhp5()
	{
		return function () { return 'Works in PHP5'; };
	}
	public static function t()
	{
		return 'No idea why this is called in PHP5!'; 
	}
}

$foo = new Foo();

try {
	$bar = ['bat' => 'calledInPhp5'];
	var_dump($foo->$bar['bat']());
} catch (Error $e) {
	echo 'ERROR: ' . $e->getMessage();
}
echo PHP_EOL;

$bar = 'test';
var_dump($foo->$bar['bat']());
echo PHP_EOL;

