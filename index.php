<?php
function getList($ver)
{
    $out  = '';
    $list = glob('php_7_' . $ver . '/*.php');
    $out .= "<h3>PHP 7.$ver Examples</h3>";
    $out .= '<ul>';
    $href = '<li><a href="/process.php?p=php_7_%d/%s">%s</a></li>';
    foreach ($list as $item) {
        $out .= sprintf($href, $ver, basename($item), basename($item));
    }
    $out .= '</ul>';
    return $out;
}

echo 'RUNNING PHP ' . PHP_VERSION;
echo '<hr>';
echo getList(0);
echo '<hr>';
echo getList(1);
