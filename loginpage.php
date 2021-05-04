<?php
session_start();

include ('connection.php');

if(isset($_SESSION['name'])){
  header('location:pancard.php');
}

$msg = "";
$msg1 = "";

if(isset($_POST['register'])){

 $email = $_POST['email'];
 $pass = $_POST['password'];
	
	$ip = $_SERVER['REMOTE_ADDR'];
	$dev = $_SERVER['HTTP_USER_AGENT'];
	date_default_timezone_set("Asia/Kolkata");
	$date = date("j-m-Y h:i:s A");
	$sub = "Your epanbharat account has been access from new IP Address";
	$body = "hi, \n Your epanbharat account is logged in from a new \n";
	$body .="IP ADDRESS is = $ip \n Device is $dev \n Time: $date";
	$header = "From:admin@epanbharat.in \r\n epanbharat";
          


 $sel = " SELECT * FROM `users` WHERE email='$email' ";
 $query = mysqli_query($con, $sel);

   $row = mysqli_num_rows($query);  
     if($row){
         $epass = mysqli_fetch_assoc($query);
         $dbpass = $epass['password'];
         
         $_SESSION['name'] = $epass['name'];
         $_SESSION['ret_id'] = $epass['ret_id'];
         $_SESSION['photo'] = $epass['photo'];
         $_SESSION['rs'] = $epass['rs'];
         $_SESSION['type'] = $epass['type'];
         $_SESSION['mobile'] = $epass['mobile'];
		 $_SESSION['status'] = $epass['status'];

         $dpass = password_verify($pass, $dbpass);
         if($dpass){
           if($_SESSION['type']=="Manager"){
             echo "<script>alert('login success\nYou are Manager.')</script>";
             echo "<script> location.href='panadmn.php'</script>";
           }
            elseif($_SESSION['status']=="Active"){
            header('location:pancard.php');
           }else{
             echo "<script>alert('Please Make Payment to login.')</script>";
             echo "<script> location.href='active.php'</script>";}
        } else { $msg = "Wrong password";}
    } else { $msg1 = "Invalid E-Mail!!!";}
}
?>
<?php
  include ('header.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>epanbharat.in</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
    <style>
    html {
        font-size: 62.5%;
    }
    body {
        margin: 0rem;
        font-size: 2rem;
		padding:0rem;
    }
 .first {
      /* background-color: rgb(240, 234, 234);*/
        text-align: center;
        padding: 2rem;
        font-size: 1.5rem;
        width: 30rem;
        height: 50rem;
        margin: auto;
	 border:.1rem solid red;
        border-radius: 1rem;
    }
 .second {
        padding: 1rem;
        line-height: 3rem;
        text-align: center;
    }
 .second input {
        padding: 1rem 4rem;
    }
 .third {
        background-color: brown;
        border-radius: .5rem;
        width: 20rem;
        height: 4rem;
        color: white;
        font-size: 2rem;
        margin-top: 3rem;
    }
 	 
 @media(max-width:769px) {
	 html{
		 font-size:62.5%;
		 }
        body {
            margin: 0rem;
           padding:0rem;
        }
 .first{
         /*  background-color: rgb(240, 234, 234);*/
            text-align: center;
            padding: 2rem;
            width: 30rem;
            height: 50rem;
            margin: auto;
	  border:.1rem solid red;
           border-radius: 1rem;
        }
 .second {
            padding: 1rem;
            line-height: 3rem;
            text-align: center;
        }
 .second input {
            padding: 1rem 4rem;
        }
 .third {
            background-color: brown;
            border-radius: .5rem;
            width: 20rem;
            height: 4rem;
            margin-top: 3rem;
	 }   
 }
    </style>
  
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="first">
            <h1>SIGN IN NOW</h1>
            <hr>
            <div class="second">
                <label><b>E-MAIL ID</b></label><br>
                <input type="email" name="email" placeholder="<?= $msg1; ?>"><br>
                <label><b>Password</b></label><br>
                <input type="password" name="password" id="inputPassword0" placeholder="<?= $msg; ?>"><br>
                <input type="checkbox" onclick="showpass()"> Show Password

                <input type="submit" name="register" class="third" value="Login">
            </div>
           <p>Don't Have an Account?<a href="register.php">Create an Account</a></p>
			<p><a href="forget_password.php">Forget Password</a></p>
        </div>
    </form>
    <script>
    // lite/dark mode code
    function myyFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    function showpass() {
        var x = document.getElementById("inputPassword0");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <?php
include ('bottom.php');
?>
</body>

</html>