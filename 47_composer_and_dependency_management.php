<?php

/*
|--------------------
| Dependcy Management
|--------------------
*/

// composer
/*
* composer uddate
* composer require
*/

// packages

/*
* packagist
*/

// versions
/*
* "require": {
*     "ircmaxell/random-lib": "1.2",
*     "ircmaxell/random-lib": "^1.2", // minor changes
*     "ircmaxell/random-lib": "<=1.2",
*     "ircmaxell/random-lib": ">1.2",
* }
*/

// autoload

require "./vendor/autoload.php";

$factory = new RandomLib\Factory;
$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
// $generator = $factory->getMediumStrengthGenerator();
$randomInt = $generator->generateInt(5, 15);

var_dump($randomInt);