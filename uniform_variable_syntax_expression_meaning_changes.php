<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
$$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
$foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
$foo->$bar['bat']()     $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
Foo::$bar['ban']()      Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
*/

$foo['bar']['baz'] = 'php5';
$php5 = 'Works in PHP5';
$php7 = 'Works in PHP7';

echo PHP_EOL;
echo "\$\$foo['bar']['baz']\n";
echo "-----------------------------------------------\n";
echo "old meaning                new meaning\n";
echo "-----------------------------------------------\n";
echo '${$foo["bar"]["baz"]}     ($$foo)["bar"]["baz"]' . PHP_EOL;
echo "-----------------------------------------------\n";

// works in PHP5; generates error in PHP7
var_dump($$foo['bar']['baz']);
echo PHP_EOL;

$abc['bar']['baz'] = 'Works in PHP7';
$foo = 'abc';

// works in PHP7; generates error in PHP5
var_dump($$foo['bar']['baz']);
echo PHP_EOL;


class Foo
{
	public $test  = ['bar' => 'test1', 'baz' => 'Works in PHP7'];
	public $test1 = 'TEST1';
	public $test2 = 'TEST2';
	public $test3 = 'Works in PHP5';
	public function test4()
	{
		return function () { return 'TEST4'; };
	}
	public static function test5()
	{
		return function () { return 'TEST5'; };
	}
}

$bar = ['baz' => 'test3'];
$foo = new Foo();

echo PHP_EOL;
echo "\$foo->\$bar['baz']\n";
echo "-----------------------------------------------\n";
echo "old meaning               new meaning\n";
echo "-----------------------------------------------\n";
echo '$foo->{$bar["baz"]}      ($foo->$bar)["baz"]' . PHP_EOL;
echo "-----------------------------------------------\n";

// works in PHP5; generates error in PHP7
var_dump($foo->$bar['baz']);
echo PHP_EOL;

// works in PHP7; generates error in PHP5
$bar = 'test';
var_dump($foo->$bar['baz']);
echo PHP_EOL;

echo PHP_EOL;
echo "\$foo->\$bar['bat']()\n";
echo "-----------------------------------------------\n";
echo "old meaning               new meaning\n";
echo "-----------------------------------------------\n";
echo '$foo->{$bar["bat"]}()    ($foo->$bar)["bat"]()' . PHP_EOL;
echo "-----------------------------------------------\n";

$bar = ['bat' => 'test4'];
var_dump($foo->$bar['bat']());
echo PHP_EOL;

$bar = 'test4';
//var_dump($foo->$bar['bat']());
echo PHP_EOL;

/*
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
*/
