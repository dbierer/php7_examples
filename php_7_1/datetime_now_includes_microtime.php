<?php
// see: http://php.net/manual/en/migration71.incompatible.php
// section: Do not call destructors on incomplete objects
date_default_timezone_set('Europe/Berlin');
$a = new DateTime();
$b = new DateTime();
if ($a == $b) {
    echo 'The two DateTime instances are equal';
} else {
    echo 'The two DateTime instances are NOT equal';
}
echo PHP_EOL;
var_dump($a);
var_dump($b);
echo PHP_EOL;
