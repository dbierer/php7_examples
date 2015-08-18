<?php
$p = (isset($_GET['p'])) ? strip_tags($_GET['p']) : 'index.php';
if (file_exists($p)) {
	highlight_file($p);
	include $p;
} else {
	include 'index.php';
}
