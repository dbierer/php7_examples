<?php
// throwable interface: ParseError

$code = 'This is not going to work';
try {
    $result = eval($code);
    var_dump($result);
} catch (\ParseError $error) {
    // Handle $error
    echo 'Sorry ... parse error';
}
