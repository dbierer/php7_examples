<?php
// continue output buffering despite aborted connection
ini_set('ignore_user_abort', 1);
ob_start();
echo "Test 1\n";
trigger_error("Fake Error", E_USER_ERROR);
echo "Test 2\n";
ob_flush();

