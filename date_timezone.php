<?php
// datetimezone

ini_set('date.timezone', '');
$date = new DateTime('now');
echo $date->format('Y-m-d H:i:s');
