<?php
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Other backward incompatible changes | Calls from incompatible context removed

error_reporting(E_ALL);

class A {
    public function test() { var_dump($this); }
}

// Note: Does NOT extend A
class B {
    public function callNonStaticMethodOfA() { A::test(); }
}

(new B)->callNonStaticMethodOfA();

// PHP 5:
/*
Deprecated:  Non-static method A::test() should not be called statically, assuming $this from incompatible context in ...
object(B)#1 (0) {
}
*/

// PHP 7:
/*
Deprecated: Non-static method A::test() should not be called statically in ...
Fatal error: Uncaught Error: Using $this when not in object context in ...
*/

