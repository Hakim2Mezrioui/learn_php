<?php

// print_r($_SERVER);
require "./40_router.php";

Route::handle('GET', 'contact', '40_contact.php');
Route::handle('GET', 'pricing', '40_pricing.php');

echo "in index.php file";