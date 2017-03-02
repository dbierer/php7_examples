<?php
// see: http://php.net/manual/en/migration70.incompatible.php
// section: Other backward incompatible changes | New objects cannot be assigned by reference 

error_reporting(E_ALL);

class C {}
$c =& new C;

// PHP 5: Deprecated ...
// PHP 7: Parse error ...

