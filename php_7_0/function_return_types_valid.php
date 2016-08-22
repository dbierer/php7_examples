<?php

// Overriding a method that did not have a return type:
class Test
{
	public function getDateTime(string $time = NULL)
	{
		if ($time) {
			return new DateTime($time);
		}
		return NULL;
	}
}
class Special extends Test
{
	public function getDateTime(string $time = NULL): DateTime
	{
		return parent::getDateTime($time);
	}
}

$test    = new Test();
$special = new Special();

// returns DateTime
var_dump($test->getDateTime('2015-09-01'));
// returns NULL
var_dump($test->getDateTime());
// returns DateTime
var_dump($special->getDateTime('2015-09-01'));
// generates error
try {
	var_dump($special->getDateTime());
} catch (Error $e) {
	echo 'ERROR: ' . $e->getMessage();
}


