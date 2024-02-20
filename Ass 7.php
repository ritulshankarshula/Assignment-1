<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="$_POST">
    <input type="name" name="yourplan">
    <input type="submit" name="submit">
</form>
<?php

$userAccountType = $_POST['yourplan'];

if ($userAccountType === "premium") {
    echo "Welcome Premium User!";
} else {
    echo "Welcome Basic User!";
}
?>
</body>
</html>