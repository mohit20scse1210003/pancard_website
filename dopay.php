<?php 
session_start();

       $ret = $_SESSION['ret_id'];
       $mobile = $_SESSION['mobile'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>epanbharat.in</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="icon" type="image/icon" href="logo2.png">
</head>
<body>
    <style>
        html{

        font-size:62.5%;
        }
        .mnb{
            font-size:2rem;
        }
        .mnb h1, h2{
            font-size:2rem;
        }
        .imgr{
            height:40%;
            width:40%;
        }
        
        .txnfrn{
            display:grid;
            grid-template-columns:25% 25%;
        }
        .txnnum{
            width:50%;
        }
        .txnamt{
            width:50%;
        }
        label{
            margin:0rem;
        }
        .subbtn{
            width:100%;
            background:green;
            color:white;
            border:none;
            border-radius:1.8rem;
            margin-top:2rem;
            margin-bottom:3rem;
        }
    @media(max-width:769px){
        .imgr{
            height:400px;
            width:300px;
        }
        .txnfrn{
            display:block;
            width:100%;
            font-size:2rem;
        }
        .txnnum{
            width:100%;
        }
        .txnamt{
            width:100%;
        }
        .subbtn{
            width:100%;
            background:blue;
            color:white;
            border:none;
            border-radius:1.6rem;
            margin-top:2rem;
            margin-bottom:2rem;
        }
    }
    </style>
    <div class="mnb">
<h1>
Please Scan This QR Code to MAKE PAYMENT.<br><br>
<b>PhonePe No. 7906100064</b><br>UPI ID => 7906100064@ybl
<br>
</h1><br>
		

<img src="Scanpe.jpg" class="imgr"><br>
	
<form class="txnfrn" id="myfrn" action="dopaytrx.php" method="post">
<div class="txnnum"><input type="hidden" name="retid" value="<?php echo $ret; ?>"><br>
<label>Transection Number</label>
<input type="text" name="trxnum"></div>
<div class="txnnum"><label>Transection Amount</label>
<input type="text" name="trxamt">
<input type="hidden" name="mobile" value="<?php echo $mobile; ?>"></div>
	<button id="sub" class="subbtn">request</button>

<!-- <h4>Please do whatsapp message with screenshot <br>
and mobile no. <b> ON <a href="https://wa.me/+917906100064/">7906100064</a></b>
</h4> -->
</form>
<span id="result"></span>
		
		<script>
			$("#sub").click(function(){
				$.post( $("#myfrn").attr("action"), $("#myfrn :input").serializeArray(), function(info){ $("#result").html(info); });
			});
			$("#myfrn").submit( function() {
				return false;
			});
		</script>
		
</body>
	</html>
