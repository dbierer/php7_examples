<?php
// example of the effect of the abstract syntax tree rework

class Test
{
	public function bar()
	{
		return "TEST\n";
	}
}

// conventional syntax
$t = new Test();
echo $t->bar();

// introduced in PHP 5.4
echo (new Test())->bar();

// php 7
//echo new Test()->bar();

