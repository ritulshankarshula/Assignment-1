<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="aqua">
    <h1 align="center">WELCOME GYUSS(●'◡'●) !</h1>
    <h2>Please verify your self </h2>

    <form method="post">
        <input type="name" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="submit">

    </form>
<center>
    <font size="60px">
<?php
$storedUsername = "ritulshankarshukla";
$storedPassword = "7668592520";

$userInputUsername = $_POST['username'];
$userInputPassword = $_POST['password']; 

if ($userInputUsername === $storedUsername && $userInputPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}
?>
    </font>
</center>
</body>
</html>