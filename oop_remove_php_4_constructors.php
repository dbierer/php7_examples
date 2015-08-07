<?php
// removed PHP 4 constructors

class Test
{
    public function test()
    {
        echo "In PHP 5.x or below, this is called as a constructor "
             . "if __construct() is not defined\n";
    }
}

echo PHP_VERSION . PHP_EOL;
echo "Before new Test()\n";
$a = new Test();
echo "After new Test()\n";
