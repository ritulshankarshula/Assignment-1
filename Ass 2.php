<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{ background-image: url('traffic.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
      
       }
     </style>
</head>
<body >
    <h1 color="red" align="center"><marquee scrollamount="35"><mark>WELCOME GYUSS!</mark></marquee>
   
   <form method="post">
   <label for="color">Choose a Colour:</label>
   <select id="colour" name="colour">
    <option value="red">Red</option>
    <option value="yellow">Yellow</option>
    <option value="green">Green</option>
  </select><br><br>
  <input type="submit" value="submit">
   </form> <br><br>
   <center><b>

<font size="50px" colour="blue">
<?php
#$colour = array("red", "yellow", "green",);
$trafficLightColor = $_POST['colour'];
if ($trafficLightColor == "green") {
  echo "Green - Go!";
} elseif ($trafficLightColor == "yellow") {
  echo "Yellow - Slow down!";
} elseif ($trafficLightColor == "red") {
  echo "Red - Stop!";
} else {
  echo "Invalid traffic light color.";
}
?>
</font>
   </b></center>
</body>
</html>