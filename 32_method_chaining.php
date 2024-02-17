<?php
/*
|--------------------
| Method Chaining
|--------------------
*/

class Humain {
    private $name;
    private $age;

    public function setName(string $name) {
        $this->name = $name;
        return $this; //*
    }

    public function setAge(int $age) {
        $this->age = $age;
        return $this; //*
    }

    public function introduce() {
        return "Hello my name is " . $this->name . " and I am " . $this->age . " years old";
    }
}

$hakim = new Humain();

echo $hakim->setAge(23)->setName("mezrioui hakim")->introduce();

/*
|--------------------
| End of Method Chaining
|--------------------
*/