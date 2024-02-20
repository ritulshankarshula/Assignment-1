<?php
$X = $_POST['amount'];
$Rupee = array(500, 200, 100, 50, 20, 10, 5, 2, 1);
foreach ($Rupee as $value) {
    $Num = intval($X / $value);
    echo $value . '=' . $Num . "<br>";
    $X = $X - ($Num * $value);
}
?>