<?php
date_default_timezone_set('Asia/Tokyo');
echo '------ set default timezone to ' . date_default_timezone_get() . PHP_EOL;
$t = new DateTime();

echo PHP_EOL . PHP_EOL;

echo '------ set timezone \'UTC\'' . PHP_EOL;
$tz = new DateTimeZone('UTC');
$t->setTimeZone($tz);
echo '------ show timezone info' . PHP_EOL;
var_dump($t->format('e T P'));

echo PHP_EOL . PHP_EOL;

echo '------ set timezone \'utc\'' . PHP_EOL;
$tz2 = new DateTimeZone('utc');
$t->setTimeZone($tz2);
echo '------ show timezone info' . PHP_EOL;
var_dump($t->format('e T P'));