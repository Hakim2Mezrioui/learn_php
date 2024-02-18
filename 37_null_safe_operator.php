<?php 
/*
|--------------------
| Null safe operator
|--------------------
*/

class Stagiaire {
    public ?School $school = null;
}

Class School {
    public $name = "OFPPT";
}

$hakim = new Stagiaire();

// echo $hakim->school->name; // error

if($hakim->school !== null) {
    echo $hakim->school->name;
}

echo $hakim->school?->name; //* ?

/*
* It's just for reading data.
*/

/*
|--------------------
| End of Null safe operator
|--------------------
*/