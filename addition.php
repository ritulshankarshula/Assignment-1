html
<form action="add_numbers.php" method="post">
  <label for="num1">Number 1:</label>
  <input type="number" name="num1" required><br>
  <label for="num2">Number 2:</label>
  <input type="number" name="num2" required><br>
  <input type="submit" value="Calculate Sum">
</form>


/*<?php
// Get user input
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

// Calculate sum and display result
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum";
?>*/x