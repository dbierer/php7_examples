<?php
// multiple "default" in switch now an error

try {
    $a = 1;
    switch ($a) {
        case 0 :
            echo 'Zero';
            break;
        case -1 :
            echo 'Negative';
            break;
        default :
            echo 'Positive';
            break;
        default :
            echo 'Non Zero';
            break;
    }
    echo PHP_EOL;
} catch (\Error $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo $e->getMessage();
}

