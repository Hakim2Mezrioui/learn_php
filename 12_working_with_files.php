<?php
/*
|--------------------
| Working with files
|--------------------
*/

// process
/*
| open a file
| read the file or write to it
| close the file
*/

//open the file
// fopen(name of file, mode); // syntax
// $file = fopen('./12_text.txt', 'r');
$file = fopen('./12_text.txt', 'w');
// $file = fopen('./12_text.txt', 'a');

// ______________________________________________ //

// flags or mode
// r for reading
// w for writing
// a for appending

// ______________________________________________ //


// read the file
// $first_line = fgets($file);
// $second_line = fgets($file);

$line = fgets($file);

while ($line != false) {
    #code
    echo $line;

    $line = fgets($file);
}

// ______________________________________________ //

// write to the file 
//fwrite(name of the file, data) // syntax

// fwrite($file, "hello world \n");
// fwrite($file, 'hello udemy' . PHP_EOL);

// ______________________________________________ //

// close the file

fclose($file);

/*
|--------------------
| End of Working with files
|--------------------
*/