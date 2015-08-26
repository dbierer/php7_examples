<?php

// generator which yields all the words out of a text file
function getWords($file) {
	$obj   = new SplFileObject($file, 'r');
	$count = 0;
	$word  = '';
	while (!$obj->eof()) {
		$c = $obj->fgetc();
		if (ctype_alpha($c)) {
			$word .= $c;
		} elseif ($word) {
			yield $word;
			$word = '';
			$count++;
		}
	}
	return $count;
}

$filename     = __DIR__ . '/gettysburg.txt';
$gettysBurg   = getWords($filename);
var_dump($gettysBurg);

$wordsPerLine = 20;
$pos          = 1;
foreach ($gettysBurg as $word) {
	echo $word . ' ';
	if ($pos++ % $wordsPerLine == 0) {
		echo PHP_EOL;
	}
}
echo PHP_EOL . 'Count: ' . $gettysBurg->getReturn();
		
