<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marvel";

$conn = mysqli_connect($servername,$username,$password,$database);

$name = $_POST['name'];

$sql = "DELETE FROM STUDENT WHERE NAME='$name'";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "data deleted successfully";
}

?>