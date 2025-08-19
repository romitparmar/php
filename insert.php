<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marvel";

$conn = mysqli_connect($servername,$username,$password,$database);

$name = $_POST['name'];
$enroll = $_POST['env'];
$pass = $_POST['pass'];

$sql = "INSERT INTO STUDENT(NAME,ENUM,PASS)VALUES('$name',$enroll,$pass)";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "done";
}


?>