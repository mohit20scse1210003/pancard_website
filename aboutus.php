<?php
    include ('header.php');
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us </title>
    <style>
        html{
            font-size: 62.5%;
            
        }
        body{
            margin:0rem;
            padding:0px;
           
        }
        .f1{
            font-size:2rem;
            /*color:grey;*/
        }
        .f2{
            color:orange;
        }
        
        .about{
            display:grid;
            grid-template-columns:33rem 32rem 32rem;
            font-size:3rem;
        }
        
        .d1, .d2, .d3{ 
            background:brown;
               color:white;
               margin-left:2rem;
               text-align:center;
               }
      @media(max-width:769px){
          html{
              font-size:62.5%;
              width:relative;
          }
        body{
            margin:0rem;
            padding:0rem;
           
        }
        .f1{
            font-size:2rem;
            
        }
        .f2{
            color:orange;
        }
        
        .about{
            display:block;
            width:100%;
            
        }
        
        .d1, .d2, .d3{ 
            background:brown;
               color:white;
               margin-left:0rem;
               text-align:center;
               margin-top:1rem;
               }
      }

    </style>
    <link rel="icon" type="image/icon" href="logo2.png">
</head>
<body>
    
    <div class="f1">
<h2 class="f2">About Us</h2>
ePanbharat established in 2020 and popular PAN service provider
 with an excellent track record for the best customer satisfaction.
It is to certified that epanbharat.in is one of the most usefull tool for 
		cybercafe shops and other Computer hubs. <br>
		To know more send a query on header section. 
		
<br><br>
<div class="about">
<div class="d1">
Mohit Solanki(Developer)<br><br>
<address>
   Shanti Nagar<br>Rabupura<br>
     G.B Nagar,203209.
 </address>
</div>
<div class="d2">
Amit Singh(Developer)<br>
<address>
   Shanti Nagar<br>Rabupura<br>
    G.B Nagar,203209.
</address>Mob. No <a href="tel:+916395021381">+916395021381</a>
</div>
<div class="d3">
<img src="Card1.jpg" width="370px" height="240px" style="border-radius: 1.9rem;">
</div>
    </div><br>
<?php
include ('bottom.php');
?>
</body>
</html>