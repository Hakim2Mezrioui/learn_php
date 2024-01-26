<?php

/*
|--------------------
| Loops
|--------------------
*/

/*
|types of loops:
|
| for
| while
| do...while
| foreach
*/

//for
// for ((initialize the counter); (condition for counter); (chnage the counter)) { 
//     # code...
// }

// for($x = 0; $x < 10; $x++) {
//     echo "value of x is $x";
// }


// ______________________________________________ //


//while
// while (condition is true) {
//     # code...
// }
// $number = 2;
// while($number < 10) {
//     echo "number is $number";
//     $number++;
// }


// ______________________________________________ //


// do... while
// do {
//     # code...
// } while (condition is true);
// $number = 20;
// do {
//     echo "number is $number";
//     $number++;
// } while ($number < 10);


// ______________________________________________ //


// foreach
// foreach ($variable as $key => $value) {
//     # code...
// }

$array = [1, 'hakim', 'udemy', 3];
// foreach ($array as $key => $value) {
//     echo "the $key in the array is $value";
// }

// foreach($array as $value) {
//     echo $value;
// }

// for($i = 0; $i < sizeof($array); $i++) {
//     echo $array[$i];
// }




/*
|--------------------
| End Loops
|--------------------
*/
