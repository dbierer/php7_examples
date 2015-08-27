<?php
// throwable interface demo

class Test
{
    public function doSomething($obj) {
        $obj->nope();
    }
    public function __destruct()
    {
        echo "Destroy called\n";
    }
}

try {
    $a = new Test();
    $a->doSomething(NULL);
} catch (\Error $e) {
    echo "Error: {$e->getMessage()}\n";
} finally {
    echo "Finally is called\n";
}

    
