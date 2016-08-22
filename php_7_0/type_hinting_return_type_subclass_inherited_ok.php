<?php
// return data type: inherited classes

class MyClass
{
	public static function make(): MyClass
	{
		return new MyClass();
	}
}

class MyOtherClass extends MyClass
{
	public static function make(): MyOtherClass
	{
		return new MyOtherClass();
	}
}

var_dump(MyClass::make());
var_dump(MyOtherClass::make());
