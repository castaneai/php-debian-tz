<?php
echo '---- php version: ' . phpversion() . PHP_EOL;

echo PHP_EOL . PHP_EOL;

date_default_timezone_set('Asia/Tokyo');
echo '------ set default timezone to ' . date_default_timezone_get() . PHP_EOL;
$t = new DateTime();
var_dump($t->format('e T P'));

echo PHP_EOL . PHP_EOL;

echo '------ set timezone \'UTC\'' . PHP_EOL;
$tz = new DateTimeZone('UTC');
$t->setTimeZone($tz);
var_dump($t->format('e T P'));

echo PHP_EOL . PHP_EOL;

echo '------ set timezone \'utc\'' . PHP_EOL;
$tz2 = new DateTimeZone('utc');
$t->setTimeZone($tz2);
var_dump($t->format('e T P'));