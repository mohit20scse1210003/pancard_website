<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="logo2.png">
	<title>EPANBHARAT.IN</title>
<meta name="description" content="epanbharat.in is the Indian website as an interconnection for making pan card. ">
<meta name="keywords" content="pan card, aadhar card, make pan card, apply for pan card, pan card banayain, update pan card">
<meta name="robots" content="index, follow">
<meta name="copyright" content="copyright under epanbharat.in-2020">
<meta name="language" content="EN">
</head>
<body onload="mufunction()">
<style>
html {
    font-size: 62.5%;
}
.mint{
     width:100vw;
     height:100vh;
     background:#2f3542;
     color:white;
     display:grid;
     place-items:center;   
 }
 .txt{
    
 }
 .txt::before{
    content:"EPANBHARAT";
    width:1%;
    color:red;
    padding:0;
    position:absolute;
    border-right:.4rem solid red;
    animation:slide 1s linear infinite;
    -webkit-animation:slide 3s linear infinite;
    overflow:hidden;
 }
 @keyframes slide{
     0%{
         width:0%;
     }
     50%{
         width:15%;
     }
     100%{
         width:0%;
     }
 }
.ani {
    margin-top: -6rem;
    padding-bottom: 3rem;
    margin-left: 15rem;
}

.pp {
    font-size: 3rem;
    background: white;
    animation-name: amit;
    animation-duration: 3s;
    animation-iteration-count: infinite;
}

@keyframes amit {
    0% {
        color: red;
    }

    50% {
        color: black;
    }

    75% {
        color: green;
    }

    100% {
        color: blue;
    }
}

.pan {
    padding-left: 2rem;
    padding-right: 2rem;
    background-color: darkred;
    height: 6rem;
	width: 100%;
    z-index: 1;
}

.pan button {
    margin-top: 1.4rem;
    padding: .6rem;
    margin-left: 2rem;
    padding-right: 2rem;
	
    
}

.uu {
    width: 9rem;
    height: 7rem;
    margin-left: 5rem;
    position: relative;
}

nav{
	width:100%;
	}
#navbar {
    overflow: hidden;
    
}

#navbar a {
    float: left;
    display: block;
    font-size: 1.3rem;
}

#navbar a:hover {
    color: black;
}

#navbar a.active {
    color: white;
}

.content {
    padding: 1rem;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
}

.sticky+.content {
    padding-top: 6rem;
}

/* popup form */
.open-button {
    background-color: #000;
    color: #fff;
    padding: 2rem;
    border: none;
    border-radius: 1rem;
    font-size: 1.6rem;
}

/* The popup form - hidden by default */
.form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 1.5rem;
    border: .3rem solid #f1f1f1;
    z-index: 9;
}

/* Add styles to the form container */
.form-container {
    width: 40rem;
    padding: 1rem;
    background-color: wheat;
}

.quer {
    background-color: black;
}

	.form-container label{
		font-size:1.2rem;
	}
	
/* Full-width input fields */
.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
    padding: 1.5rem;
    margin: .5rem 0 2.2rem 0;
    border: none;
    background: #f1f1f1;
	font-size:1.2rem;
}
	.form-container select{
		 width: 100%;
    padding: 1.5rem;
    margin: .5rem 0 2.2rem 0;
    border: none;
    background: #f1f1f1;
	font-size:1.2rem;
	}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
	font-size:1.4rem;
    width: 100%;
    margin-bottom: 1rem;
    opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
    background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover,
.open-button:hover {
    opacity: 1;
}

/*dark mode class*/
.dark-mode {
	
    background-color: black;
    color: white;
	
}
.ld{
        box-shadow:8px 5px 8px 5px rgba(20,10,30,0.5);
        border:none;
        border-radius:40%;
        font-size:2rem;
    }

@media(max-width:769px) {
    html {
        font-size: 62.5%;
        width: 100%;
    }
    .mint{
     width:100vw;
     height:100vh;
     background:#2f3542;
     color:white;
     display:grid;
     place-items:center;   
 }
 .txt{
    
 }
 .txt::before{
    content:"EPANBHARAT";
    width:1%;
    color:red;
    padding:0;
    position:absolute;
    border-right:.4rem solid red;
    animation:slide 1s linear infinite;
    -webkit-animation:slide 3s linear infinite;
    overflow:hidden;
 }
 @keyframes slide{
     0%{
         width:0%;
     }
     50%{
         width:40%;
     }
     100%{
         width:0%;
     }
 }
    
    .pan {
        padding-left: 0;
        padding-right: 0;
        margin-left:0;
        background-color: red;
        height: 20rem;
        width: 100%;
        z-index: 1;
    }
    .pan button {
    margin-top: 1rem;
    padding: .6rem;
    margin-left: 1rem;
    padding-right: .3rem;
    
}
    
.sticky {
    position: relative;
    top: 0;
    width: 100%;
}


.pp {
    width:relative;
    font-size: 3rem;
    background: white;
    animation-name: amit;
    animation-duration: 3s;
    animation-iteration-count: infinite;
}
    .ani {
    margin-top: -4rem;
    padding-bottom: .6rem;
    margin-left: 4rem;
    }
    
    .uu {
    width: 9rem;
    height: 7rem;
    margin-left: 1.5rem;
    position: relative;
    }
    .kk{
      width:7rem;
    }
    .kk img{
      margin-left:0;
      margin:0;
    }

    .uu {
        width: 4rem;
        height: 3.5rem;
        position: relative;
    }


    #navbar {
        overflow: hidden;
        height:13rem;
        width:relative;
        margin-left:0;
        position:relative;
        
    }

    #navbar a {
        float: left;
        height:3.5rem;
        font-size: 1rem;
    }


    #navbar a:hover {
        
        color: black;
    }

    #navbar a.active {
        
        color: white;
    }

    .content {
        padding: 1rem;
    }
    .ld{
        box-shadow:8px 5px 8px 5px rgba(20,10,30,0.5);
        border:none;
        border-radius:5%;
        font-size:1.6rem;
        
    }
    /* popup form */
.open-button {
    background-color: #000;
    color: #fff;
    padding: 2rem;
    border: none;
    border-radius: 1rem;
    font-size: 1.6rem;
}

/* The popup form - hidden by default */
.form-popup {
    display: none;
    position: fixed;
    bottom: 0;
	right:0;
    border: .3rem solid #f1f1f1;
    z-index: 9;
}

/* Add styles to the form container */
.form-container {
    width: 100%;
    padding: 0rem;
    background-color: wheat;
}

.quer {
    background-color: black;
}

	.form-container label{
		font-size:1.3rem;
	}
/* Full-width input fields */
.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
    padding: 1.5rem;
    margin: .5rem 0 2.2rem 0;
    border: none;
    background: #f1f1f1;
	font-size:1.2rem;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
	font-size:1.4rem;
    width: 100%;
    margin-bottom: 1rem;
    opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
    background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover,
.open-button:hover {
    opacity: 1;
	}
	.dark-mode{
		background:black;
		color:white;
	}
}
	
	@media (prefers-color-scheme: dark) {
  body {
    color: #eee;
    background: #121212;
  }

  body a {
    color: #809fff;
  }
	}
</style>
<div class="mint" id="epb">
 <p><h1 class="txt">EPANBHARAT</h1>
 ~Please Wait~</p>
 </div>

<div class="kk">
    <img src="logo.jpg" class="uu">
</div>
<div class="ani">
    <marquee behavior="" class="pp" scrollamount="7" onmouseover="javascript:stop()" onmouseout="javascript:start()">
        Support available over call from 9:00 am to 5:00 pm
        everyday and 24*7 over mail - admin@epanbharat.in </marquee>
</div>
<div class="pan" id="navbar">
    <nav>
        <a href="javascript:void(0)"><button onclick="home()"><b>HOME</b></button></a>
        <a href="javascript:void(0)"><button onclick="about()"><b>ABOUT US</b></button></a>
        <a href="javascript:void(0)"><button onclick="dawnlod()"><b>DOWNLOAD</b></button></a>
        <a href="javascript:void(0)"><button onclick="dd()"><b>CHECK STATUS</b></button></a>
        <a href="javascript:void(0)"><button onclick="reg()"><b> REGISTRATION</b></button></a>
        <a href="javascript:void(0)"> <button onclick="login()"><b>LOGIN</b></button></a>
        <a href="javascript:void(0)"><button onclick="contact()"><b>CONTACT US</b></button></a>
		<a href="javascript:void(0)"><button onclick="opensurvey()"><b>Survey</b></button></a>
        <a href="javascript:void(0)"><button class="open-button" onclick="openForm()"><b>Ask Query</b></button></a>
        <a href="javascript:void(0)"><button onclick="myyFunction()" class="ld"><b>Light/Dark</b></button></a>
    </nav>
</div>
<div class="form-popup" id="myForm">
    <form action="query.php" method="post" class="form-container">
        <h1 style="color:red;">Enter Your details</h1>

        <label style="color:red;"><b>Your Name</b></label>
        <input type="text" placeholder="Enter Your Name  " name="name" required>

        <label style="color:red;"><b>Your Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
		
		<label style="color:red;"><b>Select type of Message</b></label>
		<select name="type">
            <option>Problem</option>
			<option>Suggestion</option>
		</select>

        <label style="color:red;"><b>Message</b></label>
        <input type="text" placeholder="Please enter your problem/Feedback" name="text" required>

        <button type="submit" name="send" class="btn">Submit</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>

<script>
function mufunction(){
    var load = document.getElementById("epb");
     load.style.display="none";

}
function dawnlod() {
    location.href = 'download.php';
}

function dd() {
    location.href = 'https://trackpan.utiitsl.com/PANONLINE/#forward';
}

function contact() {
    location.href = 'contact.php';
}

function login() {
    // location.href = 'loginpage.php';
    location.href = 'login.php';
}

function home() {
    location.href = 'index.php';
}

function about() {
    location.href = 'aboutus.php';
}

function reg() {
    location.href = 'register.php';
}

//  header scroll             

window.onscroll = function() {
    myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
function opensurvey() {
	 location.href = '/survey';
}
// popform code
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
// lite/dark mode code
function myyFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");

}
</script>
</body>
</html>