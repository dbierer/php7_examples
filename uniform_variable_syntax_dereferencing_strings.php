<?php

function getStr()
{
	return 'ABCDEF';
}

echo getStr()[4];
echo PHP_EOL;

// generates error in php 5.x
echo getStr(){4};
