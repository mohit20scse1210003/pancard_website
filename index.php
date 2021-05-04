<?php include ('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>epanbharat.in (PAN CARD)</title>
</head>

<body>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
     .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    .slideshow-container {
        height: 40rem;
        margin-left: 3rem;
    }

    .text {
        font-size: 1.5rem;
        bottom: -6rem;
        width: 100%;
        text-align: center;
    }

    .numbertext {
        font-size: 1.2rem;
        padding: 8rem 12rem 0;
        margin-bottom: -1.5rem;
    }

    .dot {
        cursor: pointer;
        height: 1.5rem;
        width: 1.5rem;
        margin: 0.2rem;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    .cars {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .car {
        background-color: red;
        height: 40rem;
        margin-left: 7rem;
        color: white;
    }

    .car h1 {
        text-align: center;
        color: white;
        font-size: 3rem;
    }

    .car h2 {
        color: white;
        text-align: center;
        color: white;
        font-size: 2rem;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        text-decoration: underline;
        color: yellow;
    }

    .car1 h1 {
        font-size: 3rem;
    }

    .car1 {
        text-align: center;
        background-color: green;
        height: 40rem;
        margin-left: 2rem;
        color: white;
        font-size: 1.2rem;
    }

    .card2 h1 {
        font-size: 3rem;
    }

    .card2 {
        background-color: blueviolet;
        height: 40rem;
        margin-right: 7rem;
        margin-left: 2rem;
        text-align: center;
        color: white;
        font-size: 1.2rem;
    }

    .easy {
        text-align: center;
        color: white;
    }

    .ser {
        margin-left: 3rem;
    }

    .ldiv {
        margin-right: 1rem;
        font-size: 2.4rem;
        text-align: center;
    }

    .opacity {
        /*color: darkgray;*/
        font-size: 1.8rem;
        margin-right: 7rem;
        margin-left: 3rem;
        text-decoration: underline;
        line-height: 3rem;
    }

    .par {
        background-color: yellow;
        color: black;
        text-align: center;
        font-size: 3rem;
        margin: 0;
        width: relative;
    }

    .btn {
        background-color: red;
        color: white;
        width: 18rem;
        height: 3rem;
        margin-bottom: 2rem;
        border-radius: 2rem;
    }

    .form {
        float: right;
        margin-top: -35.3rem;
        background-color: aqua;
        margin-right: 17rem;
        width: 25rem;
        height: relative;

    }

    input {
        margin-top: 2rem;
        margin-left: 3.5rem;
    }


    @keyframes amit {
        0% {
            color: red;
        }

        50% {
            color: yellow;
        }

        75% {
            color: green;
        }

        100% {
            color: blue;
        }

    }


    img {
        opacity: 50;
        margin-left: 25rem;
    }

    .fimage {
        height: 40rem;
        width: 70rem;
        box-shadow: 8px 8px 16px gray;
    }

    .eh1 {
        background: white;
        color: black;
        font-size: 3.5rem;
    }

    @media(max-width:769px) {
        html {
            font-size: 62.5%;

        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            padding: 0;
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            height: 15rem;
            margin-left: 0rem;

            width: relative;
        }


        .text {
            font-size: 1.5rem;
            bottom: -6rem;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/4 etc) */
        .numbertext {
            display: none;
        }

        /* The dots/bullets/indicators */
        .dot {
            display: none;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            width: relative;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .cars {
            display: block;

        }

        .car {
            background-color: red;
            height: 13rem;
            width: 100%;
            margin-left: 0rem;
            color: white;
        }

        .car h1 {
            text-align: center;
            color: white;
            font-size: 3rem;
        }

        .car h2 {
            display: none;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
            color: black;
        }

        .car1 h1 {
            font-size: 3rem;
        }

        .car1 h2 {
            display: none;
        }

        .car1 {
            text-align: center;
            background-color: green;
            height: 13rem;
            width: 100%;
            margin-left: 0rem;
            margin-top: 0rem;
            color: white;
            font-size: 1.2rem;
        }

        .card2 h1 {
            font-size: 3rem;

        }

        .card2 {
            background-color: blueviolet;
            height: 13rem;
            width: 100%;
            margin-left: 0rem;
            margin-top: 0rem;
            text-align: center;
            color: white;
            font-size: 1.2rem;

        }

        .card2 h2 {
            display: none;
        }

        .easy {
            text-align: center;
            color: white;
        }

        .ser {
            margin: 0rem;

        }

        .ldiv {
            width: 100%;
            margin-left: 0rem;
            font-size: 2.4rem;
            text-align: center;
        }

        .opacity {
            /*color: darkgray;*/
            font-size: 1.8rem;
            width: 100%;
            margin-left: 0rem;
            text-decoration: underline;
            line-height: 3rem;
        }

        .pan {
            color: black;
            text-align: center;
            font-size: 3rem;
            margin: 0;
        }

        .btn {
            background-color: red;
            color: white;
            width: 16rem;
            height: 3rem;
            margin-bottom: 2rem;
            border-radius: 2rem;
        }

        .form {
            float: left;
            margin-top: -35.3rem;
            background-color: aqua;
            height: relative;
        }

        input {
            margin-top: 2rem;
            margin-left: 3.5rem;
        }


        @keyframes amit {
            0% {
                color: red;
            }

            50% {
                color: yellow;
            }

            75% {
                color: green;
            }

            100% {
                color: blue;
            }

        }


        img {
            opacity: 50;
            margin-left: 25rem;
        }

        .fimage {
            height: 20rem;
            width: 100%;
            margin-left: 0px;
            box-shadow: 8px 8px 16px gray;
        }

        .eh1 {
            background: white;
            color: black;
            font-size: 3.5rem;
            width: relative;
        }
    }
    </style>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="1p.jpg" class="fimage">
            <div class="text">Pan Card</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="2.jpg" class="fimage">
            <div class="text">Aaddhar Card</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="3.jpg" class="fimage">
            <div class="text">Pan Card</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4/4</div>
            <img src="logo2.png" class="fimage">
            <div class="text">Logo</div>
        </div>
    </div>
    <br>

    <div style="text-align:center; margin-top:10rem;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>


    <div class="easy">
        <h1 class="eh1"> Our&nbsp&nbspServices</h1>
    </div>
    <div class="cars">
        <div class="car">
            <h1><a href="pancard.php" target="_blank">Apply For<br> New <br> Pan Card</a></h1>
            <h2>Are you an minor,<br> major, senior citizen<br> or any individual,<br> who do not have a <br>PAN card?
                Do you<br> want a PAN for the<br> first time?</h2>
        </div>
        <div class="car1">
            <h1><a href="pancard.php" target="_blank">Corrections <br> in <br> Pan Card</a></h1>
            <h2>Do you already<br> have a PAN CARD? <br>Does your name<br> or any other details<br>
                needs to be<br> Corrections in your<br> existing PAN card?<br> and download your recipt</h2>
        </div>
        <div class="card2">
            <h1><a href="http://trackpan.utiitsl.com/PANONLINE/#forward" target="_blank"> Check Status<br> of <br>Pan Card</a></h1>
            <h2>Are you an minor,<br> major, senior citizen<br> or any individual,
                <br> who do not have<br> a PAN card? <br>Do you want<br> a PAN for the<br> first time?
            </h2>
        </div>
    </div>

    <div class="ser">
        <h2>
            <p class="ldiv">About Pan Card Service</p>
        </h2>
        <h3 class="opacity"><b>epanbharat.in</b> is an online portal providing information about
                      Pan Card and assistance for Individuals in applying the same.
                     

                       <br>

        </h3>
        <h2>
            <p class="ldiv">Why do we need a PAN Card?</p>
        </h2>
        <h3 class="opacity"><strong>Pan Card is an essential document for most of us in India,
                              </strong>
        </h3>
    </div>

    <?php
include ('bottom.php');
?>
</body>

</html>