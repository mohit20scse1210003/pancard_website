<?php
session_start();

if(!isset($_SESSION['name'])){
    header('location:loginpage.php');
}
include ('connection.php');

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    html{
        font-size:62.5%;
    }

    table{
        align-items:center;
        margin-left: 20rem;
    }
    td{
    border-bottom:.1rem solid black;
    padding-left:5rem;
    padding-right:1rem;
    }
    red{
    color:white;
    background:red;
    }
@media(max-width:769px){
    html{
        font-size:62.5%;
    }
    table{
        align-items:center;
        margin-left: 0rem;
        font-size:2rem;
        width:100%;
    }
    td{
    border-bottom:.1rem solid black;
    padding-left:0rem;
    padding-right:1rem;
    }
    red{
    color:white;
    background:red;
    }
    input{
        font-size:2rem;
        width:20rem;
    }
    input[type=submit]{
        color:white;
        background:red;
        border:none;
    }
}
</style>
    <div class="w3-teal"></div>
    <div class="min">
        <table><tbody>
           
            
            <th>Date/Time</th>
            <th>Name</th>
            <th>Token</th>
            <th>Status</th>
            <th>Want to <red>Delete<red></th>

        </tbody>
    <?php

    $retailerid = $_SESSION['ret_id'];
    $sel_rid = " SELECT * FROM `pancardforms` WHERE ret_id='$retailerid' ";
    $query2 = mysqli_query($con, $sel_rid);
    if(mysqli_num_rows($query2)){
  
         while( $token1 = mysqli_fetch_assoc($query2)){
             if($token1['status']=="Pending"){
         ?>
         
        <tr>

        
        <td> <?php echo $token1['date']; ?> </td>
        <td> <?php echo $token1['f_name']; ?> <?php echo $token1['m_name']; ?> <?php echo $token1['l_name']; ?> </td>
        <td> <?php echo $token1['token']; ?> </td>
        <td> <?php echo $token1['status']; ?> </td>
        <td> 

            
                <form method="post" action="">
                    
                    <!-- <input type="text" name="changstat" placeholder="Status">--><br>
                    <input type="text" name="pid" placeholder="token no."><br>
                    <input type="submit" name="subst" value="Delete">
                </form>
            </td>

         </tr>
<?php
             }
    }
    }

    ?>
        <?php 
       
             
       //  echo $tk;
           if(isset($_POST['subst'])){
           
           $pid = $_POST['pid'];
           $chngquery = " update pancardforms set status='Deleted' where token='$pid' ";
           $qyuer = mysqli_query($con,$chngquery);
           if($qyuer){
             echo "<script>alert('Status change successfully.')</script>";
             echo "<script>location.href='pancard.php'</script>";
           }else{
               echo "<script>alert('sorry')</script>";
               echo "<script>location.href='pancard.php'</script>";
           }
       }
       ?>

    </table>
    </div>
