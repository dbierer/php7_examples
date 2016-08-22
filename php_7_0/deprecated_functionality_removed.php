<?php
// see: https://wiki.php.net/rfc/remove_deprecated_functionality_in_php7
// see: https://wiki.php.net/rfc/incompat_ctx
// see: https://wiki.php.net/rfc/mcrypt-viking-funeral
// NOTE: mcrypt: some functions removed in 7.0 ... mcyrpt ext will be removed in 7.1
//       suggested replacement: openssl

class User
{
	protected $name;
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}

echo "EREG\n";
try {
	$test = 'ABCDEFG0123456789';
	echo (ereg('/^[0-9]$/', $test)) ? 'MATCH' : 'NO MATCH';
	echo "SUCCESS\n";
} catch (Error $e) {
	echo "ERROR\n";
	echo $e->getMessage();
}
echo PHP_EOL;

echo "Remove calls with incompatible Context\n";
class A1 {
	function dumpClass() {
		var_dump(get_class($this));			 
	}
}
class B1 {
	function test() {
		A1::dumpClass();
	}
}
 
try {
	$a = new A1;
	$b = new B1;
	$a->dumpClass();
	$b->test();
	echo "SUCCESS\n";
} catch (Error $e) {
	echo "ERROR\n";
	echo $e->getMessage();
}
echo PHP_EOL;

trait ATrait {
	function dumpClass() {
		var_dump(get_class($this));			 
	}
}
class A2 {
	use ATrait;
}
class B2 {
	use ATrait;
	function test() {
		$this->dumpClass();
	}
}
 
try {
	$a = new A2;
	$b = new B2;
	$a->dumpClass();
	$b->test();
	echo "SUCCESS\n";
} catch (Error $e) {
	echo "ERROR\n";
	echo $e->getMessage();
}
echo PHP_EOL;

echo "NEW BY REFERENCE\n";
try {
	//$u =& new User();
	var_dump($u);
} catch (Error $e) {
	echo "ERROR\n";
	echo $e->getMessage();
}
echo PHP_EOL;

