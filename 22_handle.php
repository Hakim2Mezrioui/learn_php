<?php

function check() : bool {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        return true;
    } 
    return false;
}

function store($name, $email, $message, $data) {
    $data[] = [
        "name" => $name,
        "email" => $email,
        "message" => $message,
    ];

    $file = fopen('./22_contacts.json', 'w');

    fwrite($file, json_encode($data));
    fclose($file);
}

function getData() {
    $file = fopen('./22_contacts.json', 'r');
    $line = fgets($file);
    $json_text = '';

    while($line != false) {
        $json_text = $json_text . $line;
        $line = fgets($file);
    }
    fclose($file);
    $contacts = $json_text ? json_decode($json_text, true) : [];
    return $contacts;
}

function main() {
    $contacts = getData();
    if(check()) {
        store($_POST['name'], $_POST['email'], $_POST['message'], $contacts);
        header("location:./22_form.php?submitted=true");
        exit();
    }
    header("location:./22_form.php?submitted=false");
    exit();
}

main();