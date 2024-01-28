<?php

/*
|--------------------
| Project 1
|--------------------
*/

/*
* Problem:
* we have a list of people's information with name and age
* 1 - we want to count the number of adults (+18 years old) and children
* 2 - we want to make a list of people between 22 to 30 who can apply for our job opening
*/

$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Pratham', 'age' => 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Amir', 'age' => 28],
    ['name' => 'Sabrina', 'age' => 22],
    ['name' => 'Rana', 'age' => 24],
    ['name' => 'Meet', 'age' => 21],
    ['name' => 'Vitto', 'age' => 24],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tom', 'age' => 31],
];


/* solution */
# 1-
$adultCount = 0;
$childCount = 0;

foreach($people as $person) {
    if($person["age"] >= 18) {
        $adultCount++;
    } else {
        $childCount++;
    }
}

echo "-- number of adult is \"$adultCount\" --" . PHP_EOL;
echo "-- number of children is \"$childCount\" --" . PHP_EOL;

# 2-
$canApplyForTheJob = [];

$i = 0;
while($i < sizeof($people)) {
    if($people[$i]['age'] >= 22 && $people[$i]['age'] <= 33) {
        array_push($canApplyForTheJob, $people[$i]);
    }

    $i++;
}

print_r($canApplyForTheJob);

/*
|--------------------
| End Of Project 1
|--------------------
*/