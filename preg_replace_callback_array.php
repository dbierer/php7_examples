<?php
// preg_replace_callback_array()
// uses preg_replace_callback_array() to update old version of phpLDAPadmin
// looking for instances of "preg_replace('/xxx/e', yyy, zzz)"

// get name of all files in $lib
$lib = __DIR__ . '/phpLDAPadmin/lib/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($lib),
                                         RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $fileObj){
    // this is the filename
    if ($fileObj->isFile()) {
        echo 'Processing: ' . $name . PHP_EOL;
        $contents = file($name);
        preg_replace_callback_array(
            [
                "!.*(preg_replace)\(\'(.*?\/e)\',(\".*?\").*!" => function ($match) {
                    echo $match[0], ' match found', PHP_EOL;
                    echo $match[1], ' match found', PHP_EOL;
                    echo $match[2], ' match found', PHP_EOL;
                    return preg_replace([$match[1],$match[2],$match[3]],
                                        ['preg_replace_callback',
                                         substr($match[2], 0, -1),
                                         function ($a) { return chr(hexdec($a));}], $match[0]);
                },
            ],
            $contents, 
        );

    }
}


