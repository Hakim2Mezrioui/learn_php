<?php
use Book\Order;

/*
|--------------------
| Namespace
|--------------------
*/
require "./30_classA.php";
require_once "./30_classB.php";

$bookOrder = new Order();
$bookOrder->handle();

$bookOrder = new Book\Order();
$bookOrder->handle();

/*
|--------------------
| End Of Namespace
|--------------------
*/