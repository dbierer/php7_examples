<?php
// fix inconsistent $this behavior
// unbelievably all of this code works in PHP 5!
// see: https://wiki.php.net/rfc/this_var

class A {
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
echo __LINE__ . ':' . PHP_EOL;
$x = new A();
$x->bar();


class B {
    static $this; // Fatal error: Cannot use $this as static variable
    function unsetThis()
    {
        // Disable ability to unset() $this
        try {
            unset($this); // Fatal error: Cannot unset $this
        } catch (Throwable $e) {
            echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
        }
    }
}

try {
    $x = new B();
    $x->unsetThis();
    echo __LINE__ . ':' . 'It Works!' . PHP_EOL;
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}

try {
    function foo($this) { // Fatal error: Cannot use $this as parameter
        // do something
        return 'It Works!';
    }
    echo __LINE__ . ':' . foo() . PHP_EOL;
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}


try {
    try {
        echo __LINE__ . ':' . 'It Works!' . PHP_EOL;
    // Disable using $this as catch variable
    } catch (Exception $this) { // Fatal error: Cannot re-assign $this
        echo __LINE__ . ':' . 'Exception Thrown!' . PHP_EOL;
    }
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}


// Disable ability to re-assign $this indirectly through $$
try {
    $a = "this";
    $$a = 42; // throw new Error("Cannot re-assign $this")
    echo __LINE__ . ':' . 'It Works!' . PHP_EOL;
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}

// Indirect re-assign $this through reference will have no effect in PHP 7.1
class D 
{
    function foo()
    {
        $a =& $this;
        $a = 42;
        var_dump($this); // prints object(C)#1 (0) {}, php-7.0 printed int(42)
    }
    function bar()
    {
        extract(["this"=>42]);  // throw new Error("Cannot re-assign $this")
        var_dump($this);
    }
    static function __callStatic($name, $args) 
    {
        var_dump($this); // prints object(C)#1 (0) {}, php-7.0 printed NULL
        self::test();   // prints "It Works!"
    }
    static function test() {
        echo __LINE__ . ':' . "It Works!\n"; 
    }
}
$x = new D();
$x->foo();

//Disable ability to re-assign $this indirectly through extract() and parse_str()
try {
    $x->bar();
    echo __LINE__ . ':' . 'It Works!' . PHP_EOL;
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}


// In PHP 7.0 and below get_defined_vars() might show or not show value of $this depending on some condition. 
// (e.g. it was shown if we used $this variable itself, but not if it was used in a $this property reference or method call). In PHP 7.1 we won't show the value of $this in all cases.
try {
    $x::methodDoesNotExist();
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}


// Attempt to use $this in plain function or method now will lead to exception “Using $this when not in object context”. 
// This unifies behavior with method call and property access. Previously PHP emitted “undefined variable” notice and continued execution assuming $this is NULL. 
// It's still possible to use isset($this) and empty($this) to check object context.

try {
    function notObject() {
        var_dump($this); // throws "Using $this when not in object context"
                         // php-7.0 emitted "Undefined variable: this" and printed NULL
    }
    notObject();
    echo __LINE__ . ':' . 'It Works!' . PHP_EOL;
} catch (Throwable $e) {
    echo __LINE__ . ':' . get_class($e) . ':' . $e->getMessage() . PHP_EOL;
}
