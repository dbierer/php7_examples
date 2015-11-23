<?php
// preg_replace_callback_array()
// uses preg_replace_callback_array() to update old version of phpLDAPadmin
// looking for instances of "preg_replace('/xxx/e', yyy, zzz)"

// get name of all files in $lib
$lib = __DIR__ . '/phpLDAPadmin/lib/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($lib),
                                         RecursiveIteratorIterator::SELF_FIRST);
$count = 0;
foreach($objects as $name => $fileObj){
    // his is the filename
    if ($fileObj->isFile()) {
        $contents = file($name);
        echo 'Processing: ' . $name . PHP_EOL;
        $flag = FALSE;
        preg_replace_callback_array(
            [
                // 1   2                 3          4        5
                "!(.*)(preg_replace)\(\'(.*?\/e)\',(\".*?\")(.*)!" =>
                function ($match) use ($flag) {
                    if ($flag) {
                        echo 'OLD: ' . PHP_EOL . trim($match[0]) . PHP_EOL;
                        $replace = $match[1]
                                . "preg_replace_callback('"
                                . substr($match[3], 0, -1)
                                . "',"
                                . 'function ($a) { return "\'" . chr(hexdec($a)) . "\'"; }'
                                . $match[5] . PHP_EOL;
                        echo 'NEW:' . PHP_EOL . trim($replace) . PHP_EOL;
                    }
                },
                // additional transformations
                // "/pattern/" => function ($match) { // code; },
            ],
            $contents
        );
    }
}


