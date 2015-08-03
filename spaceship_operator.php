<?php
echo '1<=>2', 1<=>2, PHP_EOL; // -1
echo '1<=>1', 1<=>1, PHP_EOL; // 0
echo '2<=>1', 2<=>1, PHP_EOL; // 1

echo 'Inputs: ' . PHP_EOL;
var_dump($argv);
$a = (isset($argv[1])) ? (float) $argv[1] : 0;
$b = (isset($argv[2])) ? (float) $argv[2] : 0;
switch ($a <=> $b) {
    case -1 :
        echo "$a is less than $b";
        break;
    case 0 :
        echo "$a is equal to $b";
        break;

    case 1 :
        echo "$a is greater than $b";
        break;
    default :
        echo 'Unknown';
}
echo PHP_EOL;
