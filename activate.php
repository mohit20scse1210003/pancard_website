<?php
session_start();

if($_SESSION['type']!=="Manager"){
	header('location:/');
}
?>
<?php include ('panhead.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/icon" href="logo2.png">
    <title>Active the User</title>
</head>
<body>
	<style>
		html{
		font-size:62.5%;	
		}
		body{
			font-size:2rem;
			margin-top:2rem;
		}
		.maindiv{
		    display:grid;
			grid-template-columns:1fr 1fr;
		}
		th{
		background:black;
			color:white;
			padding-left:2rem;
			padding-right:2rem;
			font-size:2rem;
		}
		.reqdiv{
		     height:relative;
		     width:50%;
			 font-size:3rem;
		}
		.transdiv{
			
		    float:right;
			height:relative;
			width:50%;
		}
	</style>
	<div class="maindiv">
<div class="reqdiv">
    <table>
		<th>Mobile</th>
        <th>status</th>
        <th>Change</th>
    <?php
    include ('connection.php');
		
    $sel = "select * from users where status=''";
    $query = mysqli_query($con,$sel);
    if(mysqli_num_rows($query) > 0){
        if(isset($_POST['active'])){
            
            $mobile = $_POST['mobile'];
            $qert = "update users set status='Active' where mobile='$mobile'";
            $dochange = mysqli_query($con,$qert);
    
            if($dochange){
                echo "<script>alert('Status Updated $mobile')</script>";
                echo "<script>location.href='activate.php'</script>";
            }else{
                  echo "<script>alert('Status not Updated')</script>";
				echo "<script>location.href='activate.php'</script>";
            }
    
         }
        while($req = mysqli_fetch_array($query)){?>
        <tr>
			
         <td>&nbsp;&nbsp;<?php echo $req['mobile']; ?>&nbsp;&nbsp;</td>
         <td>&nbsp;&nbsp;<?php echo "Unactive"; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td>&nbsp;&nbsp;
         <form method="post" action="">
         <input type="hidden" name="mobile" value="<?php echo $req['mobile']; ?>">
        <input type="submit" name="active" value="Activate">
        </form> 
        </td>
			

        </tr>

        <?php
        }
    }else{
			echo "NO UNACTIVE USER IN DATABASE. PLEASE CHECK BACK LATER.";
		}
    ?>
    </table>
	
	
</div>
	

<div class="transdiv">
    <table>
		<th>Date</th>
        <th>Mobile</th>
		<th>Transection ID</th>
        <th>Amount</th>
		<th>value</th>
    <?php
    $sel = "select * from recharge where value=''";
    $query = mysqli_query($con,$sel);
    if(mysqli_num_rows($query) > 0){
        if(isset($_POST['chang'])){
            $mobil = $_POST['mobil'];
            $qert = "update recharge set value='Used' where mobile='$mobil'";
            $dochange = mysqli_query($con,$qert);
    
            if($dochange){
                echo "<script>alert('Transection Updated $mobil')</script>";
                echo "<script>location.href='activate.php'</script>";
            }else{
                  echo "<script>alert('Status not Updated. due to some Error..!!')</script>";
				  echo "<script>location.href='activate.php'</script>";
            }
    
         }
        while($req1 = mysqli_fetch_array($query)){?>
        <tr>
		 <td><?php  echo $req1['date']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td><?php echo $req1['mobile']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		 <td><?php  echo "<pre>".$req1['transection_no']."</pre>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td>&nbsp;&nbsp;<?php echo $req1['transection_amount'];?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
         <td>&nbsp;&nbsp;
         <form method="post" action="">
         <input type="hidden" name="mobil" value="<?php echo $req1['mobile']; ?>">
        <input type="submit" name="chang" value="Used">
        </form> 
        </td>
			

        </tr>

        <?php
        }
    }else{
			echo "NO UNUSED TRANSECTION IN DATABASE. PLEASE CHECK BACK LATER.";
		}
    ?>
    </table>
	
</div>
	
	</div>
</body>
</html>