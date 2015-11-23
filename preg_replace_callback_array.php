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
    // this is the filename
    if ($fileObj->isFile()) {
        $contents = file($name);
        if (preg_replace('!/e!', $contents)) {
            echo 'Processing: ' . $name . PHP_EOL;
            preg_replace_callback_array(
                [
                    // 1   2                 3          4        5
                    "!(.*)(preg_replace)\(\'(.*?\/e)\',(\".*?\")(.*)!" => function ($match) {
                        return  $match[1] 
                                . "preg_replace('" 
                                . substr($match[3], 0, -1) 
                                . "',"
                                . function ($a) { return chr(hexdec($a)); }
                                . $match[5] . PHP_EOL;
                    },
                ],
                $contents, 
            );
            $fn = sprintf('%s/temp_%04d.php', __DIR__, $count++);
            file_put_contents($fn, $contents);
        }
    }
}


