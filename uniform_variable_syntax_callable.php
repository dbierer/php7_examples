<?php 
// callable is immediately executed in PHP 7

class Foo
{
    public function bar($format = 'Y-m-d H:i:s')
    {
        return function () {
            $date = new \DateTime('now');
            return $date->format($format);
        };
    }
}

$foo = new Foo();
echo $foo->bar()();
