<?php
// PHP 7.1 nullable type backwards compatibility break
// see: https://wiki.php.net/rfc/nullable_types 
// section: To Backward Compatibility
class Foo {
    function foo(array $f = null)
    {
        return __CLASS__ . ':' . (($f) ? implode(',', $f) : null);
    }
}
class LooseFoo extends Foo {
    function foo(array $f = [])
    {
        return __CLASS__ . ':' . implode(',', $f);
    }
}

// Such code should be modified to also allow null:
class LooseFooFixed extends Foo {
    function foo(?array $f = []) {
        return __CLASS__ . ':' . (($f) ? implode(',', $f) : null);
    }
}

echo "\nCauses Warning\n";
$loose = new LooseFoo();
echo $loose->foo() . PHP_EOL;

echo "\nNo Warning\n";
$fixed = new LooseFooFixed();
echo $fixed->foo() . PHP_EOL;
