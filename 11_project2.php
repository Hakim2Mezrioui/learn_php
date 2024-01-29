<?php 
/*
|--------------------
| Project 2
|--------------------
*/

// welcome to the Second exercise/project of this course

/*
* PROBLEM:
* we want to calculate the age of a person in days
* we will get a date and then we print out the number of days since the birthday
* for example there are 10136 days since my bithday
*/

/*
* SOLUTION
*/

$date = "2000-08-09";
$today = date("Y-m-d");

$diff = strtotime($today) - strtotime($date);

$numOfDays = $diff / (60 * 60 * 24);
echo round($numOfDays);

/*
|--------------------
| End of Project 2
|--------------------
*/