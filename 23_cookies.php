<?php

/*
|--------------------
| Cookies
|--------------------
*/

/* see the cookies in browser */

/* create */
// $expires = time() + (60 * 60 * 24 * 30); // one month
// setcookie("test", "this is a cookie", $expires, "/");

// ______________________________________________ //

/* read */
if(isset($_COOKIE['test'])) {
    echo $_COOKIE['test'];
}

/* update */
// $expires = time() + (60 * 60 * 24 * 30);
// setcookie("test", "this is a cookie updated", $expires, "/");

// ______________________________________________ //

/* delete */
// setcookie("test", "", time() - 3600, "/");

// ______________________________________________ //

/* security */
/*
* Cookies can be very good and powerful if you want to provide a very smooth and good experience for the user.
* But on the other hand, insecure cookies can cause a lot of security issues.
* Never put any sensitive information as a cookie.
* For example, Never save like set cookie credit cards.
* Never use user ID and password in the cookies and always, always encrypt the data that you want to set as cookie.
*/

/*
|--------------------
| End of Cookies
|--------------------
*/