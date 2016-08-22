<?php
// example of the effect of the abstract syntax tree rework

function test()
{
    return rand(0, 99);
}

$result = (yield test());
var_dump($result);

$result = yield test();
var_dump($result);
