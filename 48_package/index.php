<?php

require_once "./Router.php";

// Router::handle("GET", "/48_package/test", "test.php");
// Router::handle("GET", "/48_package/test", function() {
//     echo "I'm a closur function, it works";
// });
function testMe() {
    echo "this works as well";
}
// Router::handle("GET", "/48_package/test", "testMe");
Router::get("/48_package/test", "testMe");