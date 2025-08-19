<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST['name'])) {
        echo "enter the data!!!<br>";
    } else{
        if (preg_match("/^[a-zA-Z]*$/",$name)) {
            $_SESSION['name'] = $name;
        }
    }
}



if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST['pass'])) {
        echo "enter the data!!!<br>";
    } else{
        if (preg_match("/^[0-9]*$/",$pass)) {
            $_SESSION['pass'] = $pass;
        }
    }
}

$_SESSION['email'] = $email;


?>