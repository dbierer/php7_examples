<?php
// context sensitive lexer
// see: https://wiki.php.net/rfc/context_sensitive_lexer
// does *not* work when defining a function

// works OK
class Test
{
    function each(array $a, $char = ' ')
    {
        return implode($char, $a);
    }
}

$a = ['this','works','ok'];
echo (new Test())->each($a);

// fatal error
try {
    function each(array $a, $char = ' ')
    {
        return implode($char, $a);
    }

    $a = [1,2,3,4,5];
    echo each($a);
} catch (Throwable $t) {
    echo $t->getMessage();
}
