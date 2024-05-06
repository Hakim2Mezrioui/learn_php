<?php
/*
|--------------------
| Union Type
|--------------------
*/

// function introduce(string|array $name): void {
//     if(is_array($name)) {
//         foreach($name as $n) {
//             echo "my name is $n" . PHP_EOL;
//         }
//     } else {
//         echo "my name is $name";
//     }
// }
function introduce(string|array $name): string|array {
    if(is_array($name)) {
        $result = [];
        foreach($name as $n) {
            $result[] = "my name is $n" . PHP_EOL;
        }
        return $result;
    } else {
        return "my name is $name";
    }
}


print_r(introduce(["hakim", "adam"]));
echo introduce("hakim");