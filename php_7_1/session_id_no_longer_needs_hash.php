<?php
// session ID generation no longer requires hash generation in PHP 7.1
// see: https://wiki.php.net/rfc/session-id-without-hashing

$start = microtime(TRUE);

session_start();
session_regenerate_id();
session_regenerate_id();
session_regenerate_id();
session_regenerate_id();
session_regenerate_id();
session_regenerate_id();
echo 'Session ID: ' . session_id() . PHP_EOL;
echo 'Elapsed Time: ' . (microtime(TRUE) - $start);
