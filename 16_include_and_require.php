<?php

/*
|--------------------
| include and require
|--------------------
*/
echo "Hello from first file" . PHP_EOL;

/* include */
// include "./16_example.php";


/* require */
// require "./16_example.php";



/* include vs require */
/*
*Now I set include and require.
*So require does the same thing.
*But if there was an error with this file included will show us 
*a warning and then run the rest of thecode, but require throws 
*an error and stops the execution immediately.
*/



/* _once */
include_once "./16_example.php";
require_once "./16_example.php";



/*
|--------------------
| End of include and require
|--------------------
*/