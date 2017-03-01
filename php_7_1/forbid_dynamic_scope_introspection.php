<?php
// see: https://wiki.php.net/rfc/forbid_dynamic_scope_introspection
// For the functions listed (see above) and dynamic calls of the form
/*
    $fn()
    call_user_func($fn)
    array_map($fn, $array)
    etc.
*/
// will be forbidden. Such calls will result in a warning being thrown and an error-indicating return value being returned,
// that is consistent with other error-indicating return values of the respective functions.


namespace {
    echo '<pre>';
    echo "\n------------------------------------\n";
    echo 'Prints "1" in PHP 5 and "3" in 7.0';
    echo "\n------------------------------------\n";
    function test($a, $b, $c) {

        var_dump(call_user_func('func_num_args'));
    }
    test(1, 2, 3);
}

namespace Foo {
    echo "\n------------------------------------\n";
    echo 'Prints "1" in PHP 5 and 7.0';
    echo "\n------------------------------------\n";
    function test($a, $b, $c) {
        var_dump(call_user_func('func_num_args'));
    }
    test(1, 2, 3);
}

namespace Whatever {
    echo "\n------------------------------------\n";
    echo 'Prints `string(0) ""` in PHP 5 and 7.0';
    echo "\n------------------------------------\n";
    spl_autoload_register('parse_str');
    function test() {
        $FooBar = 1;
        class_exists('FooBar');
        var_dump($FooBar); // string(0) ""
    }
    test();
    echo '</pre>' . PHP_EOL;
}

// full list of functions affected:
/*
    assert() - with a string as the first argument
    compact()
    extract()
    func_get_args()
    func_get_arg()
    func_num_args()
    get_defined_vars()
    mb_parse_str() - with one arg
    parse_str() - with one arg
*/
