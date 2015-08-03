<?php
// random_bytes(int length);
$randomStr = random_bytes(16);
// random_int(int min, int max);
$randomInt = random_int(0, 127);
// output
echo "Random String: $randomStr\n";
echo "Random Int: $randomInt\n";
