<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$quantity    = '2 boxes';
$price       = 4.00;
$total_price = $quantity * $price;
echo $total_price;
// Outputs "8" and Notice: A non well formed numeric value encountered
