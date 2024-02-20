<html>
    <body bgcolor="green">

<?php

$firstUnitRate = 3.5;
$next100UnitRate1= 4;
$next100UnitRate= 5.20;
$above250UnitRate = 6.5;


$totalUnits = $_POST['unit'];;

if ($totalUnits <= 50) {
    $totalBill = $firstUnitRate * $totalUnits;
} elseif ($totalUnits  <= 150) {
    $totalBill = $firstUnitRate * 50  + ($totalUnits -50 ) * $next100UnitRate1;
} elseif ($totalUnits <= 250) {
    $totalBill = $firstUnitRate *50 + $next100UnitRate1 * 100 + ($totalUnits - 150) * $next100UnitRate;
} else {
    $totalBill = $firstUnitRate *50 + $next100UnitRate1 * 100 + $next100UnitRate * 100 + ($totalUnits - 250) * $above250UnitRate;
}
echo "unit: " . $totalUnits . "\n"; 
echo "Total bill amount: Rs. " . $totalBill . "\n";
?>

</body>
</html>