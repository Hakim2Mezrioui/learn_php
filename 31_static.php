<?php

/*
|--------------------
| Static
|--------------------
*/
class Humain {
    public static $name = 'humain';
    public static function sayHello() {
        echo "hello " . self::$name;
    }
}


/* static properties */
echo Humain::$name . PHP_EOL;

/* static methodes */
Humain::sayHello();


/* this vs self */
// this for an instance or occurance 
// self for the properties of class 


/*
|--------------------
| End of Static
|--------------------
*/