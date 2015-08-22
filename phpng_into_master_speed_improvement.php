<?php
// speed improvements

$loop  = 100;
$start = microtime(TRUE);
for ($x = 0; $x < $loop; $x++) {
	$a = 'This is a very long sentence which really does not say anything of significance';
	// create a meaningless string
	$b = rand(0, 9999) 
	   . substr($a, rand(0, strlen($a)))
	   . rand(0, 9999)
	   . substr($a, rand(0, strlen($a)));
	$c = preg_match('/\w+?(s)\w+\b/', $a);
	$d = password_hash($a . $b, PASSWORD_BCRYPT, ['cost' => 12]);
	$e = function () {
		$b = PHP_INT_MAX;
		foreach (range(1,1000) as $v) $b *= $v;
		};
	$e();
	echo $x . ' ';
}

$end = microtime(TRUE);

printf("Start: %.8f\nStop: %.8f\nElapsed: %.8f\n", $start, $end, $end - $start);
