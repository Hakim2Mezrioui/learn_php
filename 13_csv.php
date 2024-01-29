<?php

/*
|--------------------
| csv
|--------------------
*/

// what is csv
// one, two, three

// open and close
/* syntax */
// $file = fopen(name of file, mode);
// $file = fegcsv(name of file, length, separator);
// fclose(name of file);

// $file = fopen("./13_csv.csv", 'r');
// $line = fgetcsv($file);
// fclose($file);



// ______________________________________________ //


// read csv
// $file = fopen("./13_csv.csv", 'r');

// $line = fgetcsv($file);

// while($line) {
    //     $id = $line[0];
    //     $name = $line[1];
    //     echo "The id for website with the name of $name is $id" . PHP_EOL;

//     $line = fgetcsv($file);
// }

// fclose($file);


// ______________________________________________ //


// write csv
$file = fopen("./13_csv.csv", 'a');

fputcsv($file, ['6', 'kaggle']);

fclose($file);

/*
|--------------------
| End of csv
|--------------------
*/