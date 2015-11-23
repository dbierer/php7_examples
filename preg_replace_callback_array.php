<?php
// preg_replace_callback_array()

// uses preg_replace_callback_array() to update old version of phpLDAPadmin

// get name of all files in $lib
$lib = __DIR__ . '/phpLDAPadmin/lib/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($lib),
                                         RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $fileObj){
    // this is the filename
    if ($fileObj->isFile()) {
        preg_replace_callback_array(
            [
                'preg_replace\(\'(.*?)\'\)' => function ($match) {
                    echo strlen($match[0]), ' matches for "a" found', PHP_EOL;
                },
            ],
            read($name)
        );

    }
}


