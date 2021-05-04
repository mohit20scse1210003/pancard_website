<?php
include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Page</title>
    <style>
        html{
            font-size:62.5%;
        }
        body {
            margin: rem;
          /*  background-color: black;
            color:white;*/
        }
        .down{
            text-align:center;
        }
        .down{
            margin-left:7rem;
            margin-right:7rem;
            font-size:3rem;
            
        }
        .new{
            margin-left:7rem;
            margin-right:7rem;
            font-size:3rem;
            
        }
        p{
            padding:2rem;
        }
        .btn{
            float:right;
            background-color:brown;
            border:none;
            padding:1rem;
            width:10rem;
            border-radius: 1rem;
            color:white;
        }

    @media(max-width:769px){
        html{
            font-size:62.5%;
        }
        body {
            margin: 0rem;
           /* background-color: black;
            color:white;*/
        }
        .down{
            text-align:center;
        }
        .down{
            margin-left:0rem;
            margin-right:0rem;
            font-size:2rem;
            
        }
        .new{
            margin-left:0rem;
            margin-right:0rem;
            font-size:2rem;
            
        }
        p{
            padding:1rem;
        }
        .btn{
            float:right;
            background-color:brown;
            border:none;
            padding:.5rem;
            width:7rem;
            border-radius: 1rem;
            color:white;
        }
    }
        
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="d1"></div>
    <div class="down">
        <h2>Downloads</h2><hr></div>
        <div class="new"><p>New Pan Card Form <a href="PAN_49_A_FORM.pdf"download><button class="btn">Download</button></a></p><hr>
        <p>Correction Pan Card Form<a href="Correction Pan Card Form.pdf"download><button class="btn">Download</button></a></p><hr>
        <p> Sample New Pan Card Form<a href="Sample Correction Pan Card Form.pdf"download><button class="btn">Download</button></a></p><hr>
        <p> Sample Correction Pan Card Form<a href="Sample New Pan Card_Form.pdf"download><button class="btn">Download</button></a></p><hr>
        <!-- <p>Center Certificate & Banner<a href="CCB.zip"download><button class="btn">Download</button></a></p><hr> -->
        <p>Download AQ Code list<a href="ao-code-list.pdf"download><button class="btn">Download</button></a></p><hr>
        </div>
    </div>
    <?php
include ('bottom.php');
?>
    
</body>
</html>