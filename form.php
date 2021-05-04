<?php
session_start();

if(!isset($_SESSION['name'])){
    header('location:loginpage.php');
}
?>
<?php
include ('connection.php');
if(isset($_POST['submit'])){

    if($_SESSION['rs'] >= 107){
    
        $city = $_POST['city'];
        $area_code = $_POST['area_code'];
        $ao_type = $_POST['AO_type'];
        $range_code = $_POST['Range_code'];
        $ao_number = $_POST['AO_no'];
        $title = $_POST['title'];
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];
        $l_name = $_POST['l_name'];
        $aadhar_name = $_POST['aadhar_name'];
        $aadhar_no = $_POST['aadhar_no'];
        $pan_guid = $_POST['guidence'];
        $father_f_name = $_POST['father_f_name'];
        $father_m_name = $_POST['father_m_name'];
        $father_l_name = $_POST['father_l_name'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $source_income = $_POST['income'];
        $form_49 = $_FILES['aadhar1'];
        $photo = $_FILES['photo'];
        $sign = $_FILES['sign'];
        
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y/m/d h:i:s");
        

    

    // print_r ($form_49);
    $filename = $form_49['name'];
    $file2name = $photo['name'];
    $file3name = $sign['name'];
    $filepath = $form_49['tmp_name'];
    $file2path = $photo['tmp_name'];
    $file3path = $sign['tmp_name'];
    $fileerror = $form_49['error'];
    $file2error = $photo['error'];
    $file3error = $sign['error'];

    
        if($fileerror == 0 || $file2error == 0 || $file3error == 0 ){
			//if($){
			
			
        $destfile = 'upload_docs/'.$filename;
        $dest2file = 'upload_docs/'.$file2name;
        $dest3file = 'upload_docs/'.$file3name;
        

        // echo "$destfile";

        move_uploaded_file($filepath,$destfile);
       
        move_uploaded_file($file2path,$dest2file);
        move_uploaded_file($file3path,$dest3file);
        

        $token = "PRSN".rand(10000,99999999);
        
        $_SESSION['token'] = $token;
        $retid = $_SESSION['ret_id'];

        $insert = " INSERT INTO `pancardforms`(`ret_id`, `date`, `city`, `area_code`, `ao_type`, `range_code`, `ao_number`, `title`, `f_name`,
         `m_name`, `l_name`, `aadhar_name`, `aadhar_no`, `pan_guid`, `father_f_name`, `father_m_name`, `father_l_name`, `dob`, `mobile`,
          `email`, `source_income`, `token`, `status`, `form_49`, `photo`, `sign`, `purpose`) VALUES ('$retid','$date','$city','$area_code','$ao_type','$range_code',
          '$ao_number','$title','$f_name', '$m_name','$l_name','$aadhar_name','$aadhar_no', '$pan_guid','$father_f_name','$father_m_name',
          '$father_l_name','$dob','$mobile','$email','$source_income','$token','Pending','$destfile','$dest2file','$dest3file','New') ";

        $query = mysqli_query($con,$insert);

        if($query){
        
        $Rs = $_SESSION['rs'];
        $rd = 107;
        $oidid = $retid."_".rand(10000,99999999);
        date_default_timezone_set("Asia/Kolkata");
        $dtime = date("Y/m/d h:i:s");
       
        $mobile1 = $_SESSION['mobile'];
        $updt = "UPDATE `users` SET rs='$Rs'-107 WHERE ret_id='$retid'"; 
        $less = mysqli_query($con,$updt);
        $nupdt = "INSERT INTO `transection`(`mobile`, `amount`, `date`, `type`)
         VALUES ('$mobile1','$rd','$dtime','Debit')";
         $nless = mysqli_query($con,$nupdt);


        // session_unset($_SESSION['rs']);
        
        $_SESSION['rs'] = $Rs-107;
        if($less  && $nless){
        echo "<script>alert('pan card details Uploaded successfully.')</script>";
        // mail($_SESSION['email'], $subject, $body, $header);
            // echo "<script>location.href='pancard.php'</script>";
        }else{
            echo "bad";
        }
    }else{
        echo "ohello not uploaded due to problem.";
    }
		//}
    }
}else {
    echo "<script>alert('you have not enough amount. Please Recharge Your Wallet')</script>";
    echo "<script>location.href='pancard.php'</script>";
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/icon" href="logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


                    <div class="w3-container bg-danger">
                <p class="pname"><img src="<?php echo $_SESSION['photo']; ?>" class="w3-circle" hieght="25px"
                        width="30px"> Mr. <?php echo $_SESSION['name']; ?> [Rs. <?php echo $_SESSION['rs']; ?>]<b
                        style="margin-left:10%;">E-Pan Card</b>
                </p></div>
           

    <div class="container frnd mt-5 mb-5 bg-primary">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <h3>Residence Details</h3>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>City<sup>
                            <red>*</red>
                        </sup></label><br>
                    <!-- important -->
                    <select name="city" class="sel" onchange="myfon(this.value)">
                        <option>Select city</option>
                        <?php 
            include('connection.php');
                    $q = " select * from ao_code ";
                    $resut = mysqli_query($con,$q);
                    while($rw = mysqli_fetch_array($resut)){?>
                        <option> <?php echo $rw['city']; ?> </option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-1.5">
                    <label>Area Code<sup>
                            <red>*</red>
                        </sup></label><br>
                    <select name="area_code" id="sel2">
                        <option>select</option>

                    </select>
                </div>

                <div class="form-group col-md-1.5">
                    <label>AO Type<sup>
                            <red>*</red>
                        </sup></label><br>

                    <select name="AO_type" id="sel3">
                        <option>select</option>
                    </select>
                </div>
                <div class="form-group col-md-1.5">
                    <label>Range Code<sup>
                            <red>*</red>
                        </sup></label><br>
                    <select name="Range_code" id="sel4">
                        <option>select</option>
                    </select>
                </div>
                <div class="form-group col-md-1.5">
                    <label>AO Number<sup>
                            <red>*</red>
                        </sup></label><br>
                    <select name="AO_no" id="sel5">
                        <option>select</option>
                    </select>
                </div>

            

            <!-- this is for extra -->

            <div class="seperator"></div>
            <h2 class="form-group col-md-12">Application Informaion</h2>
             <div class="form-group col-md-2"><label>Title<red>*</red></label><br>
                    <select name="title" id="title">
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>

                    </select>
                </div>
                <div class="form-group col-md-3"><label>Applicant's Last Name<red>*</red></label><br>
                    <input type="text" name="l_name" id="fname" class="input-field" placeholder="" required>
                </div>
                <div class="form-group col-md-3"><label>Applicant's First Name</label><br>
                    <input type="text" name="f_name" class="nma" id="mname">
                </div>
            
                <div class="form-group col-md-3"><label>Applicant's Middle Name</label><br>
                    <input type="text" name="m_name" id="lname">
                </div>
                <div class="form-group col-md-4"><label>
                        <red>Name as per Aadhar Card</red>
                        <red>*</red>
                    </label><br>
                    <input type="text" name="aadhar_name" id="lname" required>
                </div>
                <div class="form-group col-md-8">
                    <label><red>Aadhar Card Number</red><sup><red>*</red></sup></label><br>
                    <input type="text" name="aadhar_no" id="lname" required>
                </div>
                <div class="form-group col-md-2">
                    <label>Pan Card Guidence<red>*</red></label><br>
                        <select name="guidence" id="title">
                            <option>Father</option>
                            <option>Mother</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3"><label>Father's Last Name<red>*</red></label><br>
                        <input type="text" name="father_l_name" id="fname" required>
                    </div>
                    <div class="form-group col-md-3"><label>Father's First Name</label><br>
                        <input type="text" name="father_f_name" id="mname">
                    </div>


                    <div class="form-group col-md-3"><label>Father's Middle Name</label><br>
                        <input type="text" name="father_m_name" id="lname">
                    </div>
               
                <!-- it is for date -->
                
                <div class="form-group col-md-3">
                    <label>Date of Birth<red>*</red></label><br>
                    <input type="date" name="dob" id="title" required>
                    </div>
                    <div class="form-group col-md-3"><label>Mobile Number<red>*</red></label><br>
                        <input type="text" name="mobile" id="fname" required>
                    </div>
                    <div class="form-group col-md-3"><label>Email ID<sup>
                                <red>*</red>
                            </sup></label><br>
                        <input type="email" name="email" id="mname" required>
                    </div>
                    <div class="form-group col-md-3"><label>Source of Income<sup>
                                <red>*</red>
                            </sup></label><br>
                        <select name="income" id="mname">
                            <option></option>
                            <option>No Income</option>
                        </select>
                    </div>

                
               

                <!-- This is for files -->
                <div class="seperator"></div>
                <h3 class="form-group col-md-12">Upload documents here</h3>
                <div class="form-group col-md-6">
                    
                        <label>Aadhar Card:-Size<red>(only 2MB)</red></label>
                        <input type="file" name="aadhar1" class="form-control" style="width:300px;" required>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>Passport size Photo:-<br>Size<red style="font-size:1rem;">(only 300dpi(213pxX213px))
                            </red>
                        </label>
                        <input type="file" name="photo" class="form-control" style="width:300px;" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Signature:-Size<red>(600dpi(100X200))</red></label>
                        <input type="file" name="sign" class="form-control" style="width:300px;" required>
                    </div>

                </div>


                
                    
                    <input type="submit" class="btn btn-danger mb-5 mx-5" value="Submit & Pay" name="submit">
               
        </form>
    </div>
    <script>
    function myfon(datavalue) {
        $.ajax({
            url: 'post.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },

            success: function(result) {
                $('#sel2').html(result);
            }
        });
        $.ajax({
            url: 'post1.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },
            success: function(result) {
                $('#sel3').html(result);
            }


        });

        $.ajax({
            url: 'post2.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },
            success: function(result) {
                $('#sel4').html(result);
            }


        });
        $.ajax({
            url: 'post3.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },
            success: function(result) {
                $('#sel5').html(result);
            }


        });
    }
    </script>
</body>

</html>