<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="pink">
    <h1 align="center">WELCOME GYUSS(●'◡'●) !</h1>
    <font size="50px" colour="blue">
    <main>Here you can enter your number and get your grade 🥳🥳🥳</main>
    <form method="post">
        <input type="number" name="score" max="100"><br>
        <input type="submit" name="submit"> <br><br>

    </form>
    </font>

    <font size="60px">
<?php
$score = $_POST['score']; 
$grade='';
if(isset($_POST['submit'])){
 if ($score < 60) {
    $grade = 'F';
} 
elseif ($score >= 60 && $score <= 70) {
    $grade = 'D';
} elseif ($score >= 71 && $score <= 80) {
    $grade = 'C';
} elseif ($score >= 81 && $score <= 90) {
    $grade = 'B';
} else{
    $grade = 'A';
}
echo "Your grade is: " . $grade;

}
?>
    </font>
</body>
</html>
