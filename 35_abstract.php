<?php
/*
|--------------------
| Abstract
|--------------------
*/

abstract class Training {
    public $name;

    public function sayHello() {
        echo "Hello";
    }

    abstract protected function nationality(string $nationalite);
}

class Hakim extends Training {
    public function  nationality(string $nationalite) {
        echo "My nationality is " . $nationalite . PHP_EOL;
    }
}

$hakim = new Hakim();
$hakim->name = "Your nationality"; // Set the name property
$hakim->nationality("morroco"); // Call the nationality method

/*
* The first difference is that abstract class can have properties, but with an interface I cannot have a property
* Interface cannot have properties yet interfaces may not include member variable and as you can see there
* we can have protected methods, but in an interface all the methods should be public.
*/


/*
|--------------------
| End of Abstract
|--------------------
*/