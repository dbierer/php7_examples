<?php
// array_column() now accepts an array of objects

class Foo
{
    public $col1 = 1;
    public $col2 = 'TWO';
    protected $col3 = 3;
    protected $col4 = 'FOUR';
    public function __get($var)
    {
        return $this->$var;
    }
    // NOTE: if __isset() is not defined, __get() will not work with array_column()
    public function __isset($var)
    {
        return isset($this->$var);
    }   
}

$array[] = new Foo();
$array[] = new Foo();
$array[] = new Foo();

var_dump(array_column($array, 'col1'));
var_dump(array_column($array, 'col2'));
var_dump(array_column($array, 'col3'));
var_dump(array_column($array, 'col4'));

