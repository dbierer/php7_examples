<?php 
// callable returns an array ... can dereference any element immediately
// if return array itself has a callable, can execute immediately

class Foo
{
    const FOO_FORMAT = 'Y-m-d H:i:s'; 
    public function baz()
    {
        return [
            0 => function () { return 'TEST1'; },
            1 => function () { return 'TEST2'; }
        ];
    }
    public function bar()
    {
        return function () {
            $a = [0 => function () { return 'TEST1'; },
                  1 => function () { return 'TEST2'; }
            ];
            return $a;
        };
    }
}

$foo = new Foo();
echo $foo->baz()[0]();
echo PHP_EOL;
echo $foo->bar()()[1]();
