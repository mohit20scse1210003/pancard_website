<?php
session_start();

include ('connection.php');
if(!isset($_SESSION['name'])){
    header('location:loginpage.php');
}
?>


<style>
    table{
        align-items:center;
        margin-left: 200px;
    }
th{
    /* border-bottom:2px solid black; */
    padding-left:50px;
}
@media(max-width:769px){
    html{
        font-size:62.5%;
    }
    table{
        align-items:center;
        margin-left: 0rem;
    }
th{
    border-bottom:.1rem solid black;
    padding-left:0rem;
    padding-right:1rem;
}


}
</style>
<body>
    <div class="min">
        <table><tbody>
            
            <th>Date</th>
            <th>Name</th>
            <th>Token</th>
            <th>Status</th>
        </tbody>
    <?php

    $retailerid = $_SESSION['ret_id'];
    $sel_rid = " SELECT * FROM `pancardforms` WHERE ret_id='$retailerid' ";
    $query2 = mysqli_query($con, $sel_rid);
    if(mysqli_num_rows($query2) > 0){
  
         while( $token1 = mysqli_fetch_assoc($query2)){
             if($token1['status'] == "Success"){
         ?>
    
        <tr>

        
        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <?php echo $token1['date']; ?> </td>
        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <?php echo $token1['f_name']; ?> <?php echo $token1['m_name']; ?> <?php echo $token1['l_name']; ?> </td>
        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <?php echo $token1['token']; ?> </td>
        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <?php echo $token1['status']; ?> </td>

         </tr>
<?php
             }
    }
    }

    ?>
        

    </table>
    </div>
</body>