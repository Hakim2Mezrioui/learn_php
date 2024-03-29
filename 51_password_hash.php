<?php
/*
|--------------------
| Password Hashing
|--------------------
*/

$password = 123456;

$passowrd_hash = password_hash($password, PASSWORD_DEFAULT);

// echo $passowrd_hash;

// var_dump(password_verify($password, $passowrd_hash));


if(password_verify($password, $passowrd_hash)) {
    echo "password is correct";
} else {
    echo "password is not correct";
}