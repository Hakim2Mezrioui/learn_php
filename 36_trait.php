<?php

/*
|--------------------
| Trait
|--------------------
*/

/* defintion */
trait Exmple {
    function nameOfFunction() {
        #code ...
    }

    #code ...
}

/* trait vs class */

/*
* The difference is that if I create a lot of traits, I can use all of them inside different classes
* If I change it to class, then I have to extend it. 
* I will get the same functionality, obviously no problem.
* But I would be limited to only one extent one parent.
* But here, if I use the trait itself again, I can easily have multiple traits and my class could use all of them.
*/

/* using multipe traits */

trait Speak {
    function speaking() {
        echo "I'am speaking.";
    }
}

trait Eat {
    function eating() {
        echo "I'am eating";
    }
}

class Humain {
    // use Speak;
    // use Eat; 
    // or

    use Speak, Eat;
}

/* trait vs interface */
/*
*What's the difference between trait and interface?
*Well, interface, as we have already talked about, does not implement anything.
*It's just a skeleton.
*But trait is more like a class.
*It can implement all the functions that it talks about, but interface is just a skeleton.
*And we have also talked about multiple traits like this with comma, you can list all of them at once
*or you can say use pick and then use it.
*/


$hakim = new Humain();

echo $hakim->eating() . PHP_EOL;
echo $hakim->speaking() . PHP_EOL;
/*
|--------------------
| End of Trait
|--------------------
*/