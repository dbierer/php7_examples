<?php 
// callable returns an array ... can dereference any element immediately

class Foo
{
    const FOO_FORMAT = 'Y-m-d H:i:s'; 
    public function bar()
    {
        return function () {
            $a = ['April', 'Betty', 'Cathy', 'Donna', 'Eileen', 'Frankie'];
            return $a;
        };
    }
}

$foo = new Foo();
echo $foo->bar()()[3];
