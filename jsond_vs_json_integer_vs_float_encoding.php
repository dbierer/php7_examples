<?php
// jsond vs. json extension

$raw1 = (float) 100;
$raw2 = (float) 100.01;
echo "Raw values\n";
var_dump($raw1, $raw2);
$json1 = json_encode($raw1);
$json2 = json_encode($raw2);
echo "Json encoded\n";
var_dump($json1, $json2);
echo PHP_EOL;
echo "Json decoded\n";
var_dump(json_decode($json1), json_decode($json2));


