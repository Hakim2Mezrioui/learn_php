<?php
/*
|--------------------
| Regular expression
|--------------------
*/

/* what is a regular expression */

/*
* Now let's talk about regular expressions.
* Regular expression is a sequence of characters that specifies a search pattern.
* Usually such patterns are used by a string searching algorithms to find or find and replace operations
* on a string or for input validation.
* The patterns are general and are not specific to PHP.
* You can learn and practice regular expressions or regex for short add regex 1 to 1.
*/

/* check */
// "/pattern/"
$string = 'hello world, hello youtube';
$pattern = "/world/";
if(preg_match($pattern, $string, $matches)) {
    print_r($matches);
} else {
    echo "there waren't any match";
};

/* replace */
$string = 'hello world, hello youtube'; 
$pattern = "/hello/";
$replacement = "hi";
$limit = 1;
$newString = preg_replace($pattern, $replacement, $string, $limit);
echo $newString;





/*
|--------------------
| End of Regular expression
|--------------------
*/