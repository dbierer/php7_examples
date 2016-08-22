<?php
// "?" before data type == that data type + NULL permitted
function answer1(): ?int  {
    return null; //ok
}
echo 'Line: ' . __LINE__, PHP_EOL, var_dump(answer1());

function answer2(): ?int  {
    return 42; // ok
}
echo 'Line: ' . __LINE__, PHP_EOL, var_dump(answer2());
echo PHP_EOL;

try {
    function answer3(): ?int {
        return new stdclass(); // error
    }
    var_dump(answer3());
} catch (Error $e) {
    echo 'Line: ' . __LINE__, PHP_EOL, $e->getMessage();
    echo PHP_EOL;
}

function say(?string $msg) {
    if ($msg) {
        echo $msg;
    }
}

say('hello'); // ok -- prints hello
say(null); // ok -- does not print
echo PHP_EOL;

try {
    say(); // error -- missing parameter
} catch (Error $e) {
    echo 'Line: ' . __LINE__, PHP_EOL, $e->getMessage();
    echo PHP_EOL;
}

try {
    say(new stdclass); //error -- bad type
} catch (Error $e) {
    echo 'Line: ' . __LINE__, PHP_EOL, $e->getMessage();
    echo PHP_EOL;
}
