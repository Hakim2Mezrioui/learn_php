<?php

/*
|--------------------
| Databases
|--------------------
*/

/* connect to database */
$pdo = new PDO(dsn:"mysql:host=localhost:3366;dbname=php_course", username:'root', password:'123456');
// $pdo = new PDO("mysql:host=localhost:3366;dbname=php_course", 'root', '123456');  // or like this

/* INSERT */
// $count = $pdo->exec("insert into example (name) values ('hakim')");
// $lastId = $pdo->lastInsertId();
// echo "$count rows were affected and the last inserted id is $lastId";

// $pdo->beginTransaction();
// $pdo->exec("insert into example (name) values ('php')");
// $pdo->exec("insert into example (name) values ('youtube')");
// $pdo->exec("insert into example (name) values ('udemy')");
// $pdo->exec("insert into example (name) values ('telegram')");
// $pdo->commit(); // we can use rollback for some codition

// $name = "Flutter";
// $statement = $pdo->prepare("insert into example(name) values(?)");
// $statement->bindValue(1, $name);
// $statement->execute();

// ______________________________________________ //

/* UPDATE & DELETE */
//update

// $pdo->exec("update example set name='angular' where id = 6");
// $name = "angular";
// $id = 6;
// $statement = $pdo->prepare("update example set name = ? where id = ?");
// $statement->bindValue(1, $name);
// $statement->bindValue(2, $id);
// $statement->execute();

// delete
// $id = 1;
// $statement = $pdo->prepare("delete from example where id = ?");
// $statement->bindValue(1, $id);
// $statement->execute();

// ______________________________________________ //

/* SELECT */
// $statement = $pdo->query("select * from example");
// $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach($rows as $row) {
//     echo $row['name'] . PHP_EOL;
// }

$name = 'youtube';
$statement = $pdo->prepare("select * from example where name = ?");
$statement->bindValue(1, $name);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row) {
    echo $row['name'] . PHP_EOL;
}

/*
|--------------------
| End of Databases
|--------------------
*/