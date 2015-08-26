<?php
// throwable interface demo

class Test
{
    public function doSomething($obj) {
        $obj->nope();
    }
    public function __destruct()
    {
        echo "DESTRUCT called\n";
    }
}

try {
    $a = new Test();
    $a->doSomething(NULL);
} catch (\Error $e) {
    echo "ERROR: {$e->getMessage()}\n";
} finally {
    echo "FINALLY is called\n";
}

    
