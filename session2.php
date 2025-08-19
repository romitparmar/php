<?php

session_start();

if (isset($_SESSION['name'])) {
    echo "the name is:- ".$_SESSION['name']."<br>";
} else {
    echo "opps";
}


if (isset($_SESSION['email'])) {
    echo "the email is:- ".$_SESSION['email']."<br>";
} else {
    echo "opps";
}


if (isset($_SESSION['pass'])) {
    echo "the pass is:- ".$_SESSION['pass']."<br>";
} else {
    echo "opps";
}


?>