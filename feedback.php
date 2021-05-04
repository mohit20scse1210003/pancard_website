<?php include ('header.php'); ?>
<body style="margin:0;">
	<div style="height:800px;overflow:scroll;">
<?php
include ('connection.php');

$sel = "select * from queries ORDER BY id DESC";
$query = mysqli_query($con,$sel);
if($query > 0){
		while($row = mysqli_fetch_array($query)) {?>
	
<div style="height:relative;width:100%;background:lightgray;color:red;">
	<h3><?php echo $row['name']; ?></h3>
	<h5><?php echo $row['email']; ?></h5>
	<div style="background:gray;color:white;">
		<p><?php echo $row['query']; ?></p>
	</div>
</div>
<?php
}
}
?>
	</div>
</body>
<?php include ('bottom.php'); ?>