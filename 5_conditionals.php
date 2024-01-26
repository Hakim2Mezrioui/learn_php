<?php
/*
|--------------------
| Conditionals
|--------------------
*/

// types of conditionals
/*
|if elseif else
|switch
|ternary
*/

// if elseif else

// if ($condition) {
//     # code...
// } elseif ($other_condition) {
//     # code...
// } else {
//     # code...
// }

// $value = 2;
// if($value == 2) {
//     echo "two";
// } elseif($value == 3) {
//     echo "three";
// } else {
//     echo "unknown";
// }

// switch
// switch ($variable) {
//     case 'value1':
//         # code...
//         break;
    
//     case 'value2':
//     case 'value3':  
//         # code ...
    
//     default:
//         # code...
//         break;
// }

// $variable = 5;
// switch ($variable) {
//     case 2:
//         echo "two";
//         break;
        
//         case 3:
//         case 4:  
//             echo "three or four";
//             break;
    
//     default:
//         echo "unknown";
// }

// ternary

// (condition) ? do this if true : otherwise do this;
// $variable = 2;
// echo ($variable == 2) ? "two" : "unknown";
// $variableB = $variable == 2 ? "two" : "unknown";
// echo $variableB;

// danger of nested conditionals
// not usefull

$value = 2;
if($value == 2) {
    $value = 2;
    if($value == 2) {
        if($value == 2) {
            echo "two";
        } elseif($value == 3) {
            echo "three";
        } else {
            echo "unknown";
        }
    } elseif($value == 3) {
        echo "three";
    } else {
        echo "unknown";
    }
} elseif($value == 3) {
    echo "three";
} else {
    echo "unknown";
}

/*
|--------------------
| End Conditionals
|--------------------
*/
