<?php
$mail = "mohitsolankirbr18@gmail.com";
$sub = "test email";
$body = "Hlo There it is a testing mail.";
$header = "From:admin@epanbharat.in";


if(mail($mail, $sub, $body, $header)){
	echo "mail sent successfully";
}else{
	echo "mail sent failed";
}

?>