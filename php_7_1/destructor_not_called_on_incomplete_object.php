<?php
// see: http://php.net/manual/en/migration71.incompatible.php
// section: Do not call destructors on incomplete objects

class NotComplete
{
    protected $pdo;
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
        $pdo = new PDO('these','params','wont',['work']);
    }
    public function __destruct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

try {
    $neverMakeIt = new NotComplete();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
