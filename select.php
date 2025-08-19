<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marvel";

$conn = mysqli_connect($servername,$username,$password,$database);

$enrollment = $_POST['env'];

$sql = "SELECT NAME,ENUM,PASS FROM STUDENT WHERE ENUM='$enrollment'";

$result = mysqli_query($conn,$sql);

echo "<table border=3>";
echo "<tr>
        <td>Name</td>
        <td>Enum</td>
        <td>Pass</td>
        </tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['NAME']."</td>";
    echo "<td>".$row['ENUM']."</td>";
    echo "<td>".$row['PASS']."</td>";
    echo "</tr>";
}
echo "</table>";


?>