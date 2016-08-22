<?php
// works in php 5 + 7; compile error in PHP 7.1
class C {
  function foo() {
    var_dump($this);
  }
  function bar() {
    $a="this";
    $$a=42;
    var_dump($this); // prints int(42)
    $this->foo();    // prints object(C)#1 (0) {}
  }
}
$x = new C;
$x->bar();
