<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
$$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
$foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
$foo->$bar['baz']()     $foo->{$bar['baz']}()     ($foo->$bar)['baz']()
Foo::$bar['baz']()      Foo::{$bar['baz']}()      (Foo::$bar)['baz']()
*/

$abc = "ABC\n";
$foo['bar']['baz'] = 'abc';

// old meaning            // new meaning
// ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
echo $$foo['bar']['baz'];

class Foo
{
	public $bar = ['baz' => "BAZ\n"];
}
$foo = new Foo();
echo $foo->$bar['baz'];
