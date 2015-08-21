<?php

class Foo
{
	public function bar($a = 1)
	{
		return function ($a) {
			$d = new DateTime();
			$o = $d->format('Y-m-d H:i:s');
			return $o . ':' . $a;
		};
	}
}

$obj = new Foo();
echo [$obj, 'bar']();
