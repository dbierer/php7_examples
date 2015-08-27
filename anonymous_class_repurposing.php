<?php
// anonymous class: 
// repurposing a class to facilitate inter-framework operability

$date = new DateTime('now');
echo $date->format('Y-m-d');
echo PHP_EOL;

// old way of adding 14 days:
$date->add(new DateInterval('P14D'));
echo $date->format('Y-m-d');
echo PHP_EOL;

class I
{
	public function days(int $days)
	{
		return new class($days) extends DateInterval {
			public function __construct($days)
			{
				parent::__construct('P' . $days . 'D');
			}
		};
	}
}

// new way of adding 14 day
$date->add((new I())->days(14));
echo $date->format('Y-m-d');
echo PHP_EOL;
