<?php
/*
|--------------------
| Constructor Property Promotion
|--------------------
*/

// class Person {
//     public $name;
//     public $age;

//     public function __construct(string $name, int $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function introduce() {
//         return "hello my name is $this->name and I am $this->age year old.";
//     }
// }
class Person {
    public function __construct(public string $name, public int $age) {
        if($name === "hakim") { // we could use $this  but in php 8 we can not use it;
            echo "ooooh hakim" . PHP_EOL;
        }
    }

    public function introduce() {
        return "hello my name is $this->name and I am $this->age year old.";
    }
}

$hakim = new Person("hakim", 22);
echo $hakim->introduce() . PHP_EOL;

/*
|--------------------
| End of Constructor Property Promotion
|--------------------
*/