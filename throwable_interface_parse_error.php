<?php
// throwable interface: ParseError

$code = 'This is not going to work';
$result = eval($code);
var_dump($result);
try {
    $result = eval($code);
    var_dump($result);
} catch (\ParseError $error) {
    // Handle $error
    echo 'Sorry ... parse error';
}
echo PHP_EOL;
