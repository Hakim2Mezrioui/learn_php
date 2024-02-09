<?php

/*
|--------------------
| Array Functions
|--------------------
*/

/* array filter */
// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];

// array_filter($array, function, mode);

// mode
// 0 value of each item
// ARRAY_FILTER_USE_KEY
// ARRAY_FILTER_USE_BOTH

// $filtredArray =  array_filter($array, function($level) {
//     return $level == "good"; // or false
// }, 0);

// print_r($filtredArray);

// $filtredArray =  array_filter($array, function($language) {
//     return $language == "english"; // or false
// }, ARRAY_FILTER_USE_KEY);

// print_r($filtredArray);

// $filtredArray =  array_filter($array, function($level, $language) {
//     return $language == "english" || $level == 'good'; // or false
// }, ARRAY_FILTER_USE_BOTH);

// print_r($filtredArray);


// ______________________________________________ //


/* array merge */
// $arrayA = ['Pratham', 'Vitto', 'Francesco', 'Simon'];
// $arrayB = ['Vitto', 'Oliver', 'Meet', 'James', 'Simon'];

// $mergeArray = array_merge($arrayA, $arrayB);
// print_r($mergeArray);

// $arrayA = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];
// $arrayB = [
//     'english' => 'bad',
//     'german' => 'basic',
//     'turkish' => 'fluent',
//     'french' => 'basic',
//     'chinses' => 'unknown',
// ];
// $mergeArray = array_merge($arrayA, $arrayB);
// print_r($mergeArray);


// ______________________________________________ //


/* array map */
// array_map(function, $array);
// function addHashtag($item) {
//     return '#'.$item;
// }
// $array = ['english', 'german', 'indian', 'chines', 'arabic'];
// $hashtaggedArray = array_map('addHashtag', $array);
// $hashtaggedArray = array_map(function($item) { return '#'.$item; }, $array);
// print_r($hashtaggedArray);


// ______________________________________________ //


/* array chunk */
// $array = ['english', 'german', 'indian', 'chines', 'arabic'];
// $chunkedArray = array_chunk($array, 2, true);
// $chunkedArray = array_chunk($array, 2, false);
// print_r($chunkedArray);


// ______________________________________________ //


/* array search */
// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];
// $key = array_search('good', $array, false);
// if($key != false) {
//     echo "the language is : $key";
// } else {
//     echo "I couldn't find what you're looking for";
// }


/* array replace */
// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];
// $arrayUpdated = [
//     'english' => 'fluent',
//     'german' => 'bad',
//     'turkish' => 'fluent',
//     'french' => 'unkown',
//     'chinese' => 'unkown',
// ];

// $updatedArray = array_replace($array, $arrayUpdated);  // we can pass it more then two array
// print_r($updatedArray);


// ______________________________________________ //


/* array sort */
// 1- sort byvalue of by the key
// 2- order
// 3- keep the keys

$array = [
    'english' => 'fluent',
    'german' => 'basic',
    'turkish' => 'good',
    'french' => 'unkown',
    'spanish' => 'basic',
    'chinese',
    'indian',
    'italian',
];
// print_r($array);
// sort($array);
// print_r($array);

// print_r($array);
// rsort($array);
// print_r($array);

// print_r($array);
// ksort($array);
// print_r($array);

// print_r($array);
// krsort($array);
// print_r($array);

// print_r($array);
// asort($array);
// print_r($array);

// print_r($array);
// arsort($array);
// print_r($array);


// ______________________________________________ //


/* array unique */


/* array combine */


/* array reduce */


/* array flip */