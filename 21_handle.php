<?php

// if(isset($_GET['name'])) {
//     echo "name has been set ";
// } else {
//     echo "name has not been set ";
// }

// if(isset($_GET['name'])) {
//     echo "Hello " . $_GET['name'];
// } else {
//     echo "hello stranger!";
// }

// if(!empty($_GET['name'])) {
//     echo "Hello " . $_GET['name'];
// } else {
//     echo "hello stranger!";
// }

if(!empty($_POST['name'])) {
    echo "Hello " . $_POST['name'];
} else {
    echo "hello stranger!";
}