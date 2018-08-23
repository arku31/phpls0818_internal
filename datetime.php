<?php

//echo time();
$threehoursago = time() - (60 * 60) * 3;
//echo date('d.m.Y H:i', $threehoursago);
$customDate = mktime(1, 2, 3, 4,5,2010);
//echo date('d.m.Y H:i', $customDate);

$date = '27.04.2010';
echo strtotime($date);


echo PHP_EOL;