<?php

/*
|--------------------
| isset and empty
|--------------------
*/

/* isset */
// $name = 'hakim';
// var_dump(isset($name)); // true
// $name = null;
// var_dump(isset($name)); // false
// $name = '';
// var_dump(isset($name)); // true
// var_dump(isset($surname)); // false
// $name = 0;
// var_dump(empty($name)); // true

// ______________________________________________ //

/* empty */
// $name = 'hakim';
// var_dump(empty($name)); // false it's not empty
// $name = null;
// var_dump(empty($name)); // true
// $name = '';
// var_dump(empty($name)); // true yes it's empty
// var_dump(empty($surname)); // true doesnt' exist
// $name = 0;
// var_dump(empty($name));  // true
// $name = false;
// var_dump(empty($name)); // true

// ______________________________________________ //

/* not empty */
$name = 'hakim';
var_dump(!empty($name)); // true it's not empty
$name = null;
var_dump(!empty($name)); // false
$name = '';
var_dump(!empty($name)); // false yes it's empty
var_dump(!empty($surname)); // true doesnt' exist
$name = 0;
var_dump(!empty($name));  // false
$name = false;
var_dump(!empty($name)); // false

// ______________________________________________ //

/* example */
if(!empty($username) && !empty($password)) { // && == and also || == or, so we can if(!empty($username) and !empty($password))
    // check if the data is correct
} else {
    // ask the user to type both of the value
}

$rating = 0;
if(!empty($rating)) {
    // add it to db;
    echo 'adding it to db';
} else {
    // ask the use
    echo 'tell me your rating of the movie';
}

/*
|--------------------
| End of isset and empty
|--------------------
*/