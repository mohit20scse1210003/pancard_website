<?php 
session_start();
include_once ('connection.php');
 
     $retid = $_POST['retid'];
     $txnnum = $_POST['trxnum'];
     $txnamt = $_POST['trxamt'];
     $mobile = $_POST['mobile'];

     date_default_timezone_set("Asia/Kolkata");
     $date = date("Y/m/d h:i:s A");
     //$name = $_SESSION['name'];
     //$ret = $_SESSION['ret_id'];
     //$mobile = $_SESSION['mobile'];


     $insert = "INSERT INTO `transection`(`ret_id`, `transection_id`, `transection_amt`, `mobile`, `date`)
     VALUES ('$retid', '$txnnum', '$txnamt', '$mobile', '$date')";
     $query = mysqli_query($con, $insert);
     if($query){
         echo "<h3>Request Send Successfully.</h3>";
     }else{
         echo "<h2>Request Failed...!</h2>";
     }
 


?>