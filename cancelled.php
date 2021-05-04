<?php
session_start();

if(!isset($_SESSION['name'])){
    header('location:loginpage.php');
}
include ('connection.php');

?>


<style>
    html{
        font-size:62.5%;
    }
table{
        align-items:center;
        margin-left: 10rem;
    }
th{
    
    padding-right:1rem;
    background:lightgray;
}
td{
    border-bottom:.1rem solid black;
    padding-left:5rem;
    padding-right:1rem;
}
/* red{
    color:white;
    background:red;
} */
@media(max-width:769px){
    html{
        font-size:62.5%;
    }
    table{
        align-items:center;
        margin-left: 0rem;
        font-size:1.5rem;
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
    th{
    /* border-bottom:1px solid black; */
    /* padding-left:50px; */
    padding-right:10px;
    background:lightgray;

    }
    }

</style>

    <div class="min">
        <table><tbody>
           
            
            <th> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date/Time</th>
            <th> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;Name</th>
            <th>&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;Token</th>
            <th style="background:green;color:white;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Status</th>
            <!-- <th>&nbsp; &nbsp; &nbsp;<green style="color:green;">Request Cancellation</green></th> -->

        </tbody>

    <?php

    $retailerid = $_SESSION['ret_id'];
    $sel_rid = " SELECT * FROM `pancardforms` WHERE ret_id='$retailerid' ";
    $query2 = mysqli_query($con, $sel_rid);
    if(mysqli_num_rows($query2) > 0){
  
         while( $token1 = mysqli_fetch_assoc($query2)){
             if($token1['status'] == "Deleted"){
         ?>
         
        <tr>

        
        <td> <?php echo $token1['date']; ?> </td>
        <td> <?php echo $token1['f_name']; ?> <?php echo $token1['m_name']; ?> <?php echo $token1['l_name']; ?> </td>
        <td> <?php echo $token1['token']; ?> </td>
        <td style="color:red;"> <?php echo $token1['status']; ?> </td>

         </tr>
<?php
             }
    }
    }

    ?>
        

    </table>
    </div>
