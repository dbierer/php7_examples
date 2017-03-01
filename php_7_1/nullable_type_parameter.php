<?php
// PHP 7.1 nullable type example
$data = [1,2,3,'not a number',4,5,'also not a number'];
function sumOnlyNumbers(?array $data)
{
    $sum = 0;
    if ($data) {
        foreach ($data as $item) {
            $sum += (float) $item;
        }
    }
    return $sum;
}
try {
    echo 'Sum: ' . sumOnlyNumbers($data) . PHP_EOL; // 15
    echo 'Sum: ' . sumOnlyNumbers(NULL) . PHP_EOL;  // 0
    echo 'Sum: ' . sumOnlyNumbers() . PHP_EOL;      // ArgumentCountError: Too few arguments
} catch (Error $e) {
    echo $e;
}
