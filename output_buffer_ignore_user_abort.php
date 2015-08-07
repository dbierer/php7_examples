<?php
// continue output buffering despite aborted connection

ignore_user_abort(true);
ob_start("make_fizbuzz");

for($lcvA=1;$lcvA<10;$lcvA++) {
    echo $lcvA . ",";
}

function make_fizbuzz ($buffer) {
    $buffer_as_array = explode(',',$buffer);
    $payload = '';
    foreach ($buffer_as_array as $value ) {
        if (empty($value)) {
            continue;
        }
        $payload .= $value . ":";
        $payload .= ($value%3)?'':'fizz';
        $payload .= ($value%5)?'':'buzz';
        $payload .= "\n";
    }
}
