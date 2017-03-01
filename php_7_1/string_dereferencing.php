<?php
// strings can now be accessed using array syntax
// negative offsets count from the end of the string

$list = glob('*');
$files['php'];
foreach ($list as $fn) {
    $ext = $fn[-3] . $fn[-2] . $fn[-1];
    if ($ext == 'php') {
        $files['php'][] = $fn;
    } else {
        $files['other'][] = $fn;
    }
}
echo json_encode($files, JSON_PRETTY_PRINT);
