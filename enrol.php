<?php
session_start();

if($_SESSION['type']!="Manager"){
    header('location:/');
}
include ('connection.php');
include ('panhead.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EPANBHARAT</title>
	<link rel="icon" type="image/icon" href="logo2.png">
</head>
<body>
<header style="margin-top:2rem;">
    <h1> Make Payment in Database </h1>
</header>    
<table>
<tr>
<th>S.NO.</th>
<th>NAME</th>
<th>E-MAIL</th>
<th>MOBILE</th>
<th>CITY</th>
<th>AADHAR</th>
<th>PAN CARD</th>
<th>PHOTO</th>
</tr>
<?php

	$con_sel = "SELECT * FROM `users` ORDER BY id DESC";
	$forw = mysqli_query($con, $con_sel);

	if(mysqli_num_rows($forw)>0){
        while($token = mysqli_fetch_assoc($forw)){?>
    <tr>
    <td><?php echo $token['id']; ?></td>
    <td><?php echo $token['name']; ?></td>
    <td><?php echo $token['email']; ?></td>
    <td><?php echo $token['mobile']; ?></td>
    <td><?php echo $token['city']; ?></td>
    <td>
    <?php if($token['aadhar_f'] !== "usersreg/"){?>
    <a href="<?php echo $token['aadhar_f']; ?>"><img src='<?php echo $token['aadhar_f']; ?>' height="75" width="75"></a><?php }else{ ?>
   Not Uploaded <?php } ?>
    
    </td>
    <td><?php if($token['pan_card'] !== "usersreg/"){?>
    <a href="<?php echo $token['pan_card']; ?>"><img src='<?php echo $token['pan_card']; ?>' height="75" width="75"></a><?php }else{ ?>
   Not Uploaded <?php } ?></td>
    <td><?php if($token['photo'] !== "usersreg/"){?>
    <a href="<?php echo $token['photo']; ?>"><img src='<?php echo $token['photo']; ?>' height="75" width="75"></a><?php }else{ ?>
   Not Uploaded <?php } ?></td>
    
    
    </tr>

    <?php }
}
?>
</table>
