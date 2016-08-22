<?php
// throwable interface: ParseError

try {
    include "this_code_has_issues.php";
} catch (\ParseError $error) {
    // Handle $error
    echo 'Sorry ... parse error';
}
echo PHP_EOL;
