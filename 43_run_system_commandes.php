<?php
/*
|--------------------
| Running System Commands
|--------------------
*/

// exec("mkdir 43_text", $output,  $result);
// var_dump($output);
// var_dump($result);

exec("whoami", $output,  $result);
var_dump($output);
var_dump($result);

/*
|--------------------
| End of Running System Commands
|--------------------
*/