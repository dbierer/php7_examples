<?php
class Test
{
	public $prop = 'TEST';
}

$obj1 = new Test();
$obj2 = new Test();

echo [$obj1, $obj2][0]->prop;
