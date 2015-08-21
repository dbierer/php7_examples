<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
$$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
$foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
$foo->$bar['bat']()     $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
Foo::$bar['ban']()      Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
*/

class Foo
{
	public $test  = ['baz' => 'Works in PHP7'];
	public $php5  = 'Works in PHP5';
	public $t     = 'No idea why this is called in PHP5!';
}

$bar = ['baz' => 'php5'];
$foo = new Foo();

// works in PHP5; generates error in PHP7
var_dump($foo->$bar['baz']);
echo PHP_EOL;

// works in PHP7; generates error in PHP5
$bar = 'test';
var_dump($foo->$bar['baz']);
echo PHP_EOL;
