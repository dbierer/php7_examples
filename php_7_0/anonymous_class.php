<?php

$i = 'TEST';
$obj = new class($i) {
    public function __construct($i) {
        $this->i = $i;
    }
};

echo $obj->i;
var_dump($obj);


