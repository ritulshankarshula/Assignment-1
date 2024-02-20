<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="red">

    <form method="post">
        <center><h1> Welcome Guysss!</h1></center>
        <h3>If you buy our product so you get disccount</h3>
        <marquee scrollamount="40"><h2><mark> 10% off if you buy our product over 5000🥳🥳🥳</mark></h2></marquee>
        <input type="number" name="amount" placeholder="enter your amount"> <br>
        <br>
    <input type="submit" value="submit">
    </form>
</body>
</html>




<?php
$TP= $_POST['amount'];
if ($TP >5000){
    $DP=$TP-($TP*0.1);
    echo"discounted price is".$DP;
}
else {
    echo"Totalprice is".$TP;
}