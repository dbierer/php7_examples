<?php
// PHP 4 constructors removed

class Test
{
	protected $test = 'TEST';
	// in PHP 5.x this runs as constructor
	public function test(string $test = NULL)
	{
		echo $this->test;
	}
}

$a = new Test();
