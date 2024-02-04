<?php

/*
|--------------------
| sessions
|--------------------
*/

/* start the session */
session_start();

/* create */
// $_SESSION['testSession'] = 'testSession';

/* read */
// if(isset($_SESSION["testSession"])) {
//     echo $_SESSION['testSession'];
// } else {
//     echo "it's not set yet";
// }

/* update */
// $_SESSION['testSession'] = 'testSession updated';

/* delete */
// session_unset(); // Unset all session variables
// session_destroy(); // Destroy the session

unset($_SESSION['testSession']);

/*
|--------------------
| End of sessions
|--------------------
*/