<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="aqua">
<h1 align="center">WELCOME GYUSS(❁´◡`❁)!</h1>
<font size="60px">
<H3>Enter your currunt tempreature and get deitels</H3>
<main><marquee scrollamount="20"><b>99.9% Right</b></marquee></main>
<form method="post">
    <input tpye="number" name="tempreature" max="45"><br>
    <input type="submit" name="submit"><br><br>
</form>

<?php
$currentTemperature = $_POST['tempreature'];

if ($currentTemperature < 15) {
    echo "It's a cold day!";
} elseif ($currentTemperature >= 16 && $currentTemperature =25){
    echo "It's a Good day!";
}
else{
    echo "Consider taking an umbrella";
}
?>
</font>
</body>
</html>