<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
{
let password;
do{
   password=prompt('what is the passcode?');
}while(password !=='766859');
}
</script>
</head>
<body bgcolor=hex"#1a1c3b">
    <form method="post" action="ATM.php">
        <h1 align="center">WELCOME</h1>
        <h2><marquee>Enter your amount and calculate how much note you get in indian currency</marquee></h2>
        <center>
        <input type="number" name="amount" placeholder="enter your amount"> <br>
    <br>
    <input type="submit" value="submit">
</center>
</body>
</html>