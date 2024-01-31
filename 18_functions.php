<?php
/*
|--------------------
| Function
|--------------------
*/

/* what is it */
// function test() {
//     // code here
// }

/* structure */
// function name_of_function($arguments) {
//     #code
//     return $data;
// }

// name_of_function($aruguments); // call it

// ______________________________________________ //

/* function arguments */
// function test($a, $b, $c) {

// }

// test(1, 2, 3);

// ______________________________________________ //

/* argument's data type */
// function add($a, $b) {
//     echo $a + $b;
// }
// add(5, 5);
// add("hello", 2); // error
// function add(int $a, int $b) {
//     echo $a + $b . PHP_EOL;
// }

// add(5, '5');
// add(5, '5.3');

// ______________________________________________ //

/* arguement's dafault value */
// function add(int $a = 2, int $b = 3) {
//     echo $a + $b . PHP_EOL;
// }

// add(5, 5);
// add(5);
// add();
/*example */
// function writeCsvFile($file, array $row, $separator=',', $enclosure='"') {
//     #code
// }

// ______________________________________________ //

/* function return */
// function test() :mixed { // like function test() {}
//     //code

//     return "hi";
//     return 10;
//     return 15.3;
//     return true;
// }

// test();

function test() : int {
    // return "ahkim"; // error
    return 10;
}

test();

/*
|--------------------
| End of Function
|--------------------
*/