<?php
/*
|--------------------
| match
|--------------------
*/

$number = 15;
$result = match($number) {
    5 => "it's five",   
    6 => "it's six",
    default => "unknown",
};
echo $result;

$result = match(true) {
    $number == 15 => "yes it's correct",   
    6 => "it's six",
    default => "unknown",
};
echo $result;


/*
|--------------------
| End of match
|--------------------
*/
