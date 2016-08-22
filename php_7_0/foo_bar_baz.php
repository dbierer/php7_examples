<?php
// filtered unserialize

class Foo
{
	public $foo = 'FOO';
}
class Bar
{
	public $bar = 'BAR';
}
class Baz
{
	public $baz = 'BAZ';
}

$objects = [
	'foo' => new Foo(),
	'bar' => new Bar(),
	'baz' => new Baz(),
];

$serialized = [
	'foo' => serialize($objects['foo']),
	'bar' => serialize($objects['bar']),
	'baz' => serialize($objects['baz']),
];

