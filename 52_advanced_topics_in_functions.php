<?php
/*
|--------------------
| More On functions advanced_topics_in_functions
|--------------------
*/

/* splat operators */
// function add(...$nums) {
//     return array_sum($nums);
// }

// echo add(5, 1, 4);

// ______________________________________________ //

// function greet(...$people) {
//     foreach($people as $person) {
//         echo "Hello $person" . PHP_EOL;
//     }
// }

// greet("Hakim", "Adam", "Houssam", "Karim", "Mustafa");

// ______________________________________________ //

// function introduce($name, $age) {
//     return "My name is $name and I have $age year old";
// }

// $data = ["hakim", 23];
// echo introduce(...$data);

/* callback */
function carre($num, $func) {
    // var_dump($func);
    return $num * 2 + $func($num) . PHP_EOL;
}

function addFive($num) {
    return $num + 5;
}

echo carre(6, "addFive");

echo carre(6, function ($num) {
    return $num + 5;
});

/*  */