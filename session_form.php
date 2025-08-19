<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session1.php" method="post">
        Name:-<input type="text" name="name">
        email:-<input type="email" name="email">
        $pass:-<input type="password" name="pass">
        <button>submit</button>
</body>
</html>