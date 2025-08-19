<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marvel";

$conn = mysqli_connect($servername,$username,$password,$database);

$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "UPDATE STUDENT SET PASS='$pass' WHERE NAME='$name'";

$result = mysqli_query($conn,$sql);

$sql2 = "SELECT NAME,PASS FROM STUDENT WHERE NAME='$name'";

$result2 = mysqli_query($conn,$sql2);
echo "<h1>The new passwword</h1>";
echo "<table border=3>";
echo "<tr>
        <td>Name</td>
        <td>NewPass</td>
        </tr>";
while ($row = mysqli_fetch_assoc($result2)) {
    echo "<tr>";
    echo "<td>".$row['NAME']."</td>";
    echo "<td>".$row['PASS']."</td>";
    echo "</tr>";
}
echo mysqli_affected_rows($conn);

echo "</table>";


?>