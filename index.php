<?php
echo 'PHP: ' . PHP_VERSION;
echo '<hr>';
$list = glob('*');
$div  = '<div style="width: 500px; float: left;">';
$href = '<a href="/process.php?p=%s">%s</a>';
foreach ($list as $item) {
    echo $div;
    printf($href, basename($item), basename($item));
    echo '</div>';
}
