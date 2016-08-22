<?php
// new syntax in PHP 7.1
/*
try {
   $t->throwsException2222();
} catch (Exception1111 | Exception2222 $e) {
   echo __LINE__ . ':' . $e;
} catch (\Exception $e) {
   echo __LINE__ . ':' . $e;
}
*/

class Exception1111 extends Exception
{
    public function __toString()
    {
        return __CLASS__ . ' Thrown ' . PHP_EOL;
    }
}

class Exception2222 extends Exception
{
    public function __toString()
    {
        return __CLASS__ . ' Thrown ' . PHP_EOL;
    }
}

class Test
{
    public function throwsException2222()
    {
        throw new Exception2222();
    }
}

$t = new Test();

// old syntax
try {
   $t->throwsException2222();
} catch (Exception1111 $e) {
   echo __LINE__ . ':' . $e;
} catch (Exception2222 $e) {
   echo __LINE__ . ':' . $e;
} catch (Exception $e) {
   echo __LINE__ . ':' . $e;
}

// new syntax in PHP 7.1
try {
   $t->throwsException2222();
} catch (Exception1111 | Exception2222 $e) {
   echo __LINE__ . ':' . $e;
} catch (\Exception $e) {
   echo __LINE__ . ':' . $e;
}
