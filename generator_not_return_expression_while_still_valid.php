<?php
// will not return a value while generator is still "valid"

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
echo $gettysBurg->current();
for ($x = 0; $x < 20; $x++) {
	$gettysBurg->next();
	echo $gettysBurg->current() . ' ';
}
echo PHP_EOL . 'Count: ' . $gettysBurg->getReturn();
		
