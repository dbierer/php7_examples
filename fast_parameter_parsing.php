<?php
// parameter parsing represents considerable overhead, even in simple functions

$a = range('A', 'F');
$m = 100000;
$o = '';
$start = microtime(TRUE);
for ($x = 0; $x < $m; $x++) {
	$count = 0;
	$output = '';
	foreach ($a as $letter) {
		if (is_string($letter)) {
			$count++;
			$output .= ord($letter) . ' ';
		}
	}
	$o .= sprintf("%04d : %s\n", $x, $output);
}
$stop  = microtime(TRUE);
$diff  = $stop - $start;
printf("%10s : %12.8f \n%10s : %12.8f \n%10s : %12.8f\n",
	   'Start', $start, 'Stop', $stop, 'Diff', $diff);
echo "-------------------------------------------------------\n";
echo $o;
