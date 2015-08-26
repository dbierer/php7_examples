<?php
// data type the return value

class MyClass
{
	public function foo($a): array
	{
		return $a;
	}
}

class MyOtherClass extends MyClass
{
	public function foo(): stdClass
	{
		return new stdClass();
	}
}
