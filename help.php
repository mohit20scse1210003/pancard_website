<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOANBHARAT (Help)</title>
	<link rel="icon" type="image/icon" href="logo2.png">
</head>
<body>
<a href="help/reghelp.php"><b>FOR REGISTERATION</b></a>
<br><a href="help/loghelp.php"><b>FOR Login</b></a>
<br><a href="help/wallethelp.php"><b>HOW TO RECHARGE WALLET</b></a>
<br><a href="help/npanhelp.php"><b>APPLYING FOR A NEW PAN CARD</b></a>
<br><a href="help/upanhelp.php"><b>APPLYING FOR UPDATE/CORRECTION PAN CARD</b></a>
<br><a href="help/minorpanhelp.php"><b>Minor/Below 18 year PAN Crad</b></a>
<br><a href="help/rdpanhelp.php"><b>I upload a wrong detailed pan card</b></a>
    <h3>NEED MORE HELP ??</h3>
    <form method="post" action="">
    I want help on: <input type="text" name="help" placeholder="how to .... ....???"> <input type="submit" name="submit" value="SUBMIT">
    <?php
    include ('connection.php');
    if(isset($_POST['submit'])){
        $text = $_POST['help'];
        date_default_timezone_set("Asia/Kolkata");
        $date = date("d-m-Y h:i A");
        $insert = "INSERT INTO `help` (`text`,`date`)VALUE('$text','$date')";
        $query = mysqli_query($con,$insert);
        if($query){
            echo "<br>your query received as <br>";
            echo $text;
        }
    }
    ?>
    </form>
</body>
</html>