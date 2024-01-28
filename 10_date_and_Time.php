<?php

/*
|--------------------
| Date and Time
|--------------------
*/

// the most useful functions
// strtotime
// date

// ______________________________________________ //

// strtotime
// var_dump(strtotime('adfafasdffadfs'));
// echo strtotime("26 aug 2022"). PHP_EOL;
// echo strtotime("26 august 2022"). PHP_EOL;
// echo strtotime("26 august 2022"). PHP_EOL;
// echo strtotime("aug 26 2022"). PHP_EOL;
// echo strtotime("august 26 2022"). PHP_EOL;
// echo strtotime("2022-08-26"). PHP_EOL;
// echo strtotime("08/25/2022"). PHP_EOL;
// echo strtotime("yasterday"). PHP_EOL;
// echo strtotime("7 day ago"). PHP_EOL;

// ______________________________________________ //

// timestamp
// echo strtotime("today");

// ______________________________________________ //

// date
// 'Y-m-d' 2022-08-25 default format

// echo date('Y-m-d') . PHP_EOL;
// echo date('Y-m-d', strtotime("yesterday")) . PHP_EOL;
// echo date('Y-m-d', strtotime("7 day ago")) . PHP_EOL;
// echo date('Y-m-d', strtotime("+2 days")) . PHP_EOL;

// ______________________________________________ //

// date formats
echo date('d'). PHP_EOL;
echo date('j'). PHP_EOL;
echo date('D'). PHP_EOL;
echo date('l'). PHP_EOL;

echo date('H:i:s'). PHP_EOL;
echo date('H:i:s T'). PHP_EOL;

/*
|--------------------
| End Of Date and Time
|--------------------
*/