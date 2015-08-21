<?php
// expression meaning changes

/*
                        // old meaning            // new meaning
$$foo['bar']['baz']     ${$foo['bar']['baz']}     ($$foo)['bar']['baz']
$foo->$bar['baz']       $foo->{$bar['baz']}       ($foo->$bar)['baz']
$foo->$bar['bat']()     $foo->{$bar['bat']}()     ($foo->$bar)['bat']()
Foo::$bar['ban']()      Foo::{$bar['ban']}()      (Foo::$bar)['ban']()
*/

$foo['bar']['baz'] = 'php5';
$a    = 'No idea why this is called in PHP5!';
$php5 = 'Works in PHP5';
$php7 = 'Works in PHP7';

// works in PHP5; generates error in PHP7
var_dump($$foo['bar']['baz']);
echo PHP_EOL;

$abc['bar']['baz'] = 'Works in PHP7';
$foo = 'abc';

// works in PHP7; generates error in PHP5
var_dump($$foo['bar']['baz']);
echo PHP_EOL;
