<?php
// constructor behavior: silent NULL

$fmt = new IntlDateFormatter('fr_FR',
						     IntlDateFormatter::FULL, 
						     IntlDateFormatter::FULL,
							 'SomeBogus/Timezone',
							 IntlDateFormatter::GREGORIAN  );

if (!$fmt) {
	echo 'Surprise!';
} else {
	echo "First Formatted output is ".$fmt->format(0);
}
echo PHP_EOL;
