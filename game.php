<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="pink">
    <center>
        <h1><marquee> Number Gusseing game </marquee> </h1>
        <h3> Enter a number between 1 to 10 </h3>
        <form method="post">
            <input type="text" name="num" placeholder=" Enter a num">
            <br>
            <button type="submit" name="submit">Guess</button>
            

</form>
    </center>
    <?php
          $x = rand(1,10);
          $num=$_POST['num'];
           if ($num <$x){
             Echo"your number is lower!<br />";
           }
            elseif($num > $x)
            {
                Echo" your number is higher!";
            }
           
            elseif($num == $x){
            echo"congurations! same same but different😂😂";
           }

          
          ?>


</body>
</html>