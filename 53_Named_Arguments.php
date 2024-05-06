<?php
/*
|--------------------
| Named Arguments
|--------------------
*/

function introduce($name = 'khawla', $age = 20, $learning = "PHP") {
    echo "Hello I am $name and I am $age years old. I am learning $learning";
}

introduce(learning: "PYTHON", name: "hakim");