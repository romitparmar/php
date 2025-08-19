<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marvel";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "CREATE TABLE STUDENT(NAME CHAR(12),ENUM INT(10),PASS INT(4))";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "done";
}



?>