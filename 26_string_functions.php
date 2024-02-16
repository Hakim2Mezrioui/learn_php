<?php
/*
|--------------------
| Array String
|--------------------
*/

/* whatweare going to do */

$text = 'this is a sample text';

echo $text . PHP_EOL;

// ______________________________________________ //

/* string to array */
$stringToArray = explode(" ", $text);
print_r($stringToArray);

// ______________________________________________ //

/* array to string */
$arrayToString = implode(' ', $stringToArray);
echo $arrayToString . PHP_EOL;

// ______________________________________________ //

/* string to uppercase */
$uppercasedText = strtoupper($text);
echo $uppercasedText . PHP_EOL;

// ______________________________________________ //

/* String to lowercase */
$lowercasedText = strtolower($uppercasedText);
echo $lowercasedText . PHP_EOL;

// ______________________________________________ //

/* Uppercase first letter */
$ucfirstText = ucfirst($text);
echo $ucfirstText . PHP_EOL;
// ______________________________________________ //

/* uppercase first letter of each word */
$ucwords = ucwords($text);
echo $ucwords . PHP_EOL;

// ______________________________________________ //

/* clean up extra spaces */
$ucwords = '        ' . $ucwords.'      ';
echo $ucwords . PHP_EOL;
$trimmedText = trim($ucwords);

echo $trimmedText;

// ______________________________________________ //

/* new lines to html breaks */
$trimmedText = $trimmedText . '\n this is the second line';
echo $trimmedText .PHP_EOL;

$newLineToBreak = nl2br($trimmedText);
echo $newLineToBreak;

// ______________________________________________ //

/* remove Html Tags */
$newLineToBreak = $newLineToBreak . "<div><p>this is inside the paragraph</p></div>";
echo $newLineToBreak . PHP_EOL;
$strippedTags = strip_tags($newLineToBreak);
echo $strippedTags;

/*
|--------------------
| End of String Functions
|--------------------
*/