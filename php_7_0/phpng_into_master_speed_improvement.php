<?php
// speed improvements

ob_start();
$loop  = 20;
$start = microtime(TRUE);
for ($x = 0; $x < $loop; $x++) {
	echo $x . ' ';
	// create a meaningless string
	$a = 'This is a very long sentence which really does not say anything of significance';
	// add something even more meaningless to the meaningless string
	$a .= rand(0, 9999) 
	   . substr($a, rand(0, strlen($a)))
	   . rand(0, 9999)
	   . substr($a, rand(0, strlen($a)));
	$b = preg_match('/\w+?(s)\w+\b/', $a);
	$c = password_hash($a . $b, PASSWORD_BCRYPT, ['cost' => 12]);
	$d = function () {
			$m = PHP_INT_MAX;
			foreach (range(1,1000) as $v) $m *= $v;
		};
	$d();
}

$stop = microtime(TRUE);

printf("\nStart:  %.8f\nStop:   %.8f\nElapsed: %.8f\n", $start, $stop, $stop - $start);
ob_end_flush();
