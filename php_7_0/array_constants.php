<?php

// works in php 5.x and 7
const NAME = 'Jim';
const EMAIL = NAME . '@starfleet.gov';
const FRUIT = ['apple', 'banana', 'cherry', 'durian'];

echo EMAIL;
var_dump(FRUIT);

// works in php 7
define('CITIES', ['Utrecht','Reading','Santa Rosa','Aberdeen','Surin']);
var_dump(CITIES);
