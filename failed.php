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
        margin-left: 20rem;
    }
td{
    border-bottom:.1rem solid black;
    padding-left:5rem;
    padding-right:1rem;
}


@media(max-width:769px){

    html{
        font-size:62.5%;
    }
    table{
        align-items:center;
        margin-left: 0rem;
        padding:0rem;
    }
td{
    border-bottom:.1rem solid black;
    padding-left:0rem;
    padding-right:1rem;
}

}
</style>
<body>
    <div class="min">
        <table><tbody>
           
            
            <td>Date/Time</td>
            <td>Name</td>
            <td>Token</td>
            <td style="background:green;">Status</td>
            <!-- <td>Want to <red>Delete<red></td> -->

        </tbody>
    <?php

    $retailerid = $_SESSION['ret_id'];
    $sel_rid = " SELECT * FROM `pancardforms` WHERE ret_id='$retailerid' ";
    $query2 = mysqli_query($con, $sel_rid);
    if(mysqli_num_rows($query2) > 0){
  
         while( $token1 = mysqli_fetch_assoc($query2)){
             if($token1['status'] == "Failed"){
         ?>
         
        <tr>

        
        <td> <?php echo $token1['date']; ?> </td>
        <td> <?php echo $token1['f_name']; ?> <?php echo $token1['m_name']; ?> <?php echo $token1['l_name']; ?> </td>
        <td> <?php echo $token1['token']; ?> </td>
        <td> <?php echo $token1['status']; ?> </td>

         </tr>
<?php
             }
    }
    }

    ?>
        

    </table>
    </div>
</body>