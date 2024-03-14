<?php

/*
|--------------------
| Interacting With Python
|--------------------
*/

exec("python ./44_sayHello.py", $output, $resultCode);
var_dump($output);

exec("python ./44_sayHello.py hakim", $output, $resultCode);
var_dump($output);

/*
|--------------------
| End of Interacting With Python
|--------------------
*/