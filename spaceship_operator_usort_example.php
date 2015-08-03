<?php
$array = [  'oranges',
            'apples',
            'bananas',
            'grapes'];
echo 'Before: ' . PHP_EOL;
print_r($array);
usort($array, function ($left, $right) { return $left <=> $right; });
echo 'After: ' . PHP_EOL;
print_r($array);
