<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="pink">
    <h1 align="center">WELCOME GYUSS ✍️(◔◡◔)!</h1><BR><br>
    <font size="50px" colour="blue">
    <form method="POST">
    <input type="number" name="step" pacleholder="enter step">
    <input type="submit" value="submit">
</form>
<center> <b> 
<?php 
$steps = $_POST['step']; 

if ($steps < 5000) {
    $fitnessLevel = 'Beginner';
} elseif ($steps >= 5000 && $steps <= 10000) {
    $fitnessLevel = 'Intermediate';
} else {
    $fitnessLevel = 'Advanced';
}

echo "Your fitness level is: " . $fitnessLevel;
?>
</font>
</center>
</body>
</html>