<?php
// break
$names = ["Hakim", "Tijani", "Badr", "Siham"];
$foundIt = false;
foreach($names as $name) {
    echo $name . PHP_EOL;
    if($name == "Tijani") {
        $foundIt = true;
        break;
    }
}

// echo $foundIt;

// continue
$numbers = [3, 3000, 457, 786, 234];
foreach($numbers as $number) {
    echo $number . PHP_EOL;
    if($number % 3 == 0) {
        continue;
    }
    echo $number . PHP_EOL;
    echo $number . PHP_EOL;
}