<?php
// continue output buffering despite aborted connection
ini_set('ignore_user_abort', 1);
ob_start("replaceMe");
echo "BEFORE:  REPLACE ME WITH SOMETHING ELSE\n";
trigger_error("Fake Error", E_USER_ERROR);
echo "AFTER:   REPLACE ME WITH SOMETHING ELSE\n";
ob_flush();

function replaceMe($buffer)
{
    return str_replace('SOMETHING ELSE', 'A BOGUS SUBSTITUTE', $buffer);
}

