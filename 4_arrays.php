<?php 

/*
|--------------------
| Arrays
|--------------------
*/

// array as a datatype
$array = [1, 2, 3, 'amir', [10, 20, 30]];

// two ways to define an array
$a = [1, 2, 3, 4, 5];

$b = array(1, 2, 3, 4, 5);

// printing an array
// print_r($a);
// var_dump($a);

// array deconstructing
$array = [1, 2, 3, 'amir', [10, 20, 30]];
// print_r($array);

// array types
// indexed
$a = [
    0 => 1,
    23 => 2, 
    55 => 'amir',
];

// associative
$a = [
    'x' => 1,
    'y' => 2, 
    'name' => 'amir',
];

// combined
$a = [
    //indexed
    23 => 2, 
    55 => 'amir',

    // association
    'x' => 1,
    'y' => 2, 
    'name' => 'amir',
];

// get a value from the array
// array[key]

// echo $a['name'];
// print_r($a['name']);
// var_dump($a['name']);

// add a new value to the array
// array[key] = value;
// array[] = value;
$a['tutorial'] = "youtube";
$a[] = 'udemy';
print_r($a); 

// update a value in the array
$a['name'] = "amir updated";
print_r($a);

/*
|--------------------
| End arrays
|--------------------
*/
