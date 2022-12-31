<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show if the number is even or odd</title>
</head>
<body>
    <h1>Show If A Number is Even or Odd</h1>
    <form action="#" method="POST">
        <label>Enter your number</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    if($n1%2==0) //number divided by 2 but reminders remain 0
        echo $n1 . " is an even number";
    else 
        echo $n1 . " is an odd number";
    }
?>
