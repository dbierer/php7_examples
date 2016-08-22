<?php
// generator calls "sub" generators using "yield from"

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

function getLotsOfWords(array $files)
{
	foreach ($files as $item) {
		yield from getWords($item);
	}
}

$lots    = getLotsOfWords(['gettysburg.txt','star-trek.txt','i-have-a-dream.txt']);
$pos     = 1;
$perLine = 20;
foreach ($lots as $word) {
	echo $word . ' ';
	if ($pos++ % $perLine == 0) {
		echo PHP_EOL;
	}
}
