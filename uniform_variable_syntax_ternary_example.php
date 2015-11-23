<?php

class Foo
{
	public static $test = 'Test';
	public function bar()
	{
		return self::$test;
	}
}

$a = new Foo();
echo ($a ?: $b)->bar();
