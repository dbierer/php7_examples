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
	public static $bar = ['ban' => 'calledInPhp7'];
	public static function calledInPhp5()
	{
		return 'Works in PHP5';
	}
}

$foo = new Foo();
$bar = ['ban' => 'calledInPhp5'];
echo Foo::$bar['ban']();
