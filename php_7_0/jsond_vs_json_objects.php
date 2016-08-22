<?php
// jsond vs. json extension

class Test
{
	public $name = 'TEST';
	public $value = 12345;
}

$t = new Test();
echo $t->name . ':' . $t->value . PHP_EOL;

$j = json_encode($t);
echo $j . PHP_EOL;

$x = json_decode($j);
echo $x->name . ':' . $x->value . PHP_EOL;

