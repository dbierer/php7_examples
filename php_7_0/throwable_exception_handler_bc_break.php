<?php
// custom exception handlers could break as Error could get thrown vs. Exception
// see: http://php.net/manual/en/migration70.incompatible.php
// section: set_exception_handler() is no longer guaranteed to receive Exception objects

// this Exception handler function signature works for Error or Exception
/*
function handleException($e)
{
    echo __FUNCTION__ . ':' . get_class($e) . ':' . $e->getMessage();
}
*/

// this works in PHP 5 but not 7
function handleException(Exception $e)
{
    echo __FUNCTION__ . ':' . get_class($e) . ':' . $e->getMessage();
}

set_exception_handler('handleException');

class ThrowsException
{
    protected $pdo;
    public function badPdo()
    {
        $this->pdo = new PDO('bad_dsn', 'bad_user', 'bad_pwd', ['bad' => 'options']);
    }
}

// here Error is thrown, which invokes "handleException()"
function do_something($obj) {
    $obj->nope();
}
do_something(null);

// handleException works OK in this case
$throws = new ThrowsException();
$throws->badPdo();

