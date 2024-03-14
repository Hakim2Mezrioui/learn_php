<?php

/*
|--------------------
| Validation & Santizing
|--------------------
*/

/* validation */
/*
* There are two ways to validate the emails in PHP.
* The first one is using regular expression.
* As we have seen already.
* We can check prick match if it matches the pattern for emails.
* And the email, even if it matches, it would return one and we say, okay, user has passed the correct
* format, or if it returns zero, we can say, okay, user has not passed the correct format about the
*/

// preg_match($pattern, $email);

/* filtre */
// filter_var(variable, filter);

// fiter for email
$variable = "text@exemple.com";
if(filter_var($variable, FILTER_VALIDATE_EMAIL)) {
    echo 'email is valid. thank you' . PHP_EOL;
} else {
    echo "email is not valid" . PHP_EOL;
}

// fiter for url
$variable = "https://exemple.com";
if(filter_var($variable, FILTER_VALIDATE_URL)) {
    echo 'url is valid. thank you' . PHP_EOL;
} else {
    echo "url is not valid" . PHP_EOL;
}

// ______________________________________________ //

// sanitizing
// sanitizing for string
$variable = "<p>Hello world!</p>";
$flag = FILTER_SANITIZE_STRING;
$sanitizedData = filter_var($variable, $flag);
echo $sanitizedData . PHP_EOL;

// sanitizing for email
$variable = "<p>email@exemple.com</p>"; // When sanitizing for email, remove whitespace, special characters (<, >, &, $, %, #, *, [, ], {, }, (, ), ", ', `, |, , /, :, ;, ?, !, ,, ., _, +, -, =) 
$flag = FILTER_SANITIZE_STRING;
$sanitizedData = filter_var($variable, $flag);
echo $sanitizedData . PHP_EOL;

// sanitizing for url
$variable = "<p>https://exemle.com</p>"; // When sanitizing for email, remove whitespace, special characters (<, >, &, $, %, #, @, *)
$flag = FILTER_SANITIZE_URL;
$sanitizedData = filter_var($variable, $flag);
echo $sanitizedData . PHP_EOL;

// sanitizing for number
$variable = "45.43"; // When sanitizing for email, remove whitespace, special characters (<, >, &, $, %, #, @, *)
$flag = FILTER_SANITIZE_NUMBER_int;
$sanitizedData = filter_var($variable, $flag);
echo $sanitizedData . PHP_EOL;

/*
|--------------------
| End of Validation & Santizing
|--------------------
*/