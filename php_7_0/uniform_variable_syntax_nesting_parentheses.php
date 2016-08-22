<?php

class Foo
{
	public static function bar($a = 1)
	{
		return function ($a) {
			$d = new DateTime();
			$o = $d->format('Y-m-d H:i:s');
			return $o . ':' . $a;
		};
	}
	public function __invoke($a = 2)
	{
		return self::bar($a);
	}
}

function myFoo($a = 3)
{
	return function ($a) {
		$d = new DateTime();
		$o = $d->format('Y-m-d H:i:s');
		return $o . ':' . $a;
	};
}

echo myFoo()(1);
echo PHP_EOL;

$foo = new Foo();
echo $foo->bar()(2);
echo PHP_EOL;

echo Foo::bar()(3);
echo PHP_EOL;

echo $foo()(4);
echo PHP_EOL;
