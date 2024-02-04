<?php

session_start();

if(isset($_SESSION["testSession"])) {
    echo $_SESSION['testSession'];
} else {
    echo "it's not set yet";
}