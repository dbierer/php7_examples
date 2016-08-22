<?php
function yieldTest()
{
    $foo = 0;
    echo yield -1;
    // interpreted in PHP 5.x as
    // echo (yield) - 1;
    // interpreted in PHP 7 as
    // echo yield (-1);

    yield $foo or die;
    // interpreted in PHP 5.x as
    // yield ($foo or die);
    // interpreted in PHP 7 as
    // (yield $foo) or die;

}

foreach (yieldTest() as $item) echo $item;
