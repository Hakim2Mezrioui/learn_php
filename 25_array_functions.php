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

// $filtredArray =  array_intersecter($array, function($level, $language) {
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

// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
//     'chinese',
//     'indian',
//     'italian',
// ];
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
// SORT_REGULAR
// SORT_NUMERIC
// SORT_STRING
// SORT_LOCALE_STRING

// $array = ['amir', 'php', 'youtube', 'amir', '2022', 2022,'youtube'];
// $uniqueArray = array_unique($array, SORT_REGULAR);
// print_r($uniqueArray);


// ______________________________________________ //


/* array combine */
// $keys = ['english', 'german', 'french'];
// $values = ['fluent', 'good', 'unkown'];

// $combinedArray = array_combine($keys, $values);
// print_r($combinedArray);


// ______________________________________________ //


/* array reduce */
// $array = [1, 2, 3, 4, 5];
// $sum = array_reduce($array, function($carry, $item) {
//     $carry = $carry + $item;
//     return $carry;
// });

// echo $sum;
// echo array_intersect$array);
// echo array_intersectuct($array);


// ______________________________________________ //


/* array flip */
// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'arabic' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];

// $flipedArray = array_flip($array);
// print_r($flipedArray);


// ______________________________________________ //


/* array diff */
// $arrayA = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];
// $arrayB = [
//     'english' => 'bad',
//     'chinses' => 'unknown',
// ];

// $arrayC = [
//     'turkish' => 'good',
//     'french' => 'unkown',
//     'spanish' => 'basic',
// ];

// $diffArray =  array_diff($arrayA, $arrayC); // COMPARE VALUES
// print_r($diffArray);
// $diffArrayKey = array_diff_key($arrayA, $arrayC); // COMPARE KEYS
// print_r($diffArrayKey);
// $diffArrayAssoc = array_diff_assoc($arrayA, $arrayB); // COMPARE BOTH
// print_r($diffArrayAssoc);


// ______________________________________________ //


/* array intersect */

// $arrayA = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unknown',
//     'spanish' => 'basic',
// ];

// $arrayB = [
//     'english' => 'bad',
//     'chinses' => 'unknown',
// ];

// $arrayC = [
//     'english' => 'bad',
//     'turkish' => 'good',
//     'french' => 'unknown',
//     'spanish' => 'basic',
// ];

// $intersectedArray =  array_intersect($arrayA, $arrayB, $arrayC); // COMPARE VALUES if exists in all the arrays
// print_r($intersectedArray);
// $intersectedArrayKey = array_intersect_key($arrayA, $arrayB, $arrayC); // COMPARE KEYS if exists in all the arrays
// print_r($intersectedArrayKey);
// $intersectedArrayAssoc = array_intersect_assoc($arrayA, $arrayB); // COMPARE BOTH
// print_r($intersectedArrayAssoc);


// ______________________________________________ //


/* array change key case */
// $array = [
//     'english' => 'fluent',
//     'german' => 'basic',
//     'turkish' => 'good',
//     'french' => 'unknown',
//     'spanish' => 'basic',
// ];

// $changedKeys = array_change_key_case($array, CASE_UPPER); // CASE_LOWER
// print_r($changedKeys);


/* Array to string */
$array = ['hello', 'this', 'is', 'an', 'array'];
$sentence = implode(" ", $array);
$newArray = explode(" ", $sentence);
// echo $sentence;
print_r($newArray);

/*
|--------------------
| End Of Array Functions
|--------------------
*/