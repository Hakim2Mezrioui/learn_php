<?php

/*
|--------------------
| Interface
|--------------------
*/

/* definition */
interface Humain {
    public function sayName();
    public function getAge(int $annee);
}

interface Developper {
    public function programmingLanguage();
}

/* interface vs class */


/* why interface */

/* implement */
// class Hakim implements Humain {
//     public function sayName() {
//         return "hakim mezrioui";
//     }
//     public function getAge($annee) {
//         return date('Y') - $annee;
//     }

//     public function fly() {
//         return "i can't fly";
//     }
// }

/* using multip interfaces */
class Hakim implements Humain, Developper {
    public function sayName() {
        return "hakim mezrioui";
    }
    public function getAge($annee) {
        return date('Y') - $annee;
    }
    public function programmingLanguage() {
        echo "php";
    }

    public function fly() {
        return "i can't fly";
    }
}



$hakim = new Hakim();
echo $hakim->sayName() . PHP_EOL;
echo $hakim->getAge(2000);
echo $hakim->programmingLanguage();

/*
|--------------------
| Interface
|--------------------
*/