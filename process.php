<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$p = (isset($_GET['p'])) ? strip_tags($_GET['p']) : 'index.php';
if (file_exists($p)) {
	echo 'PHP: ' . PHP_VERSION;
    echo '<h1>' . $p . '</h1>';
    highlight_file($p);
    echo '<hr><h1>Output</h1><hr>';
    echo '<pre>';
    include $p;
    echo '</pre>';
} else {
    include 'index.php';
}
