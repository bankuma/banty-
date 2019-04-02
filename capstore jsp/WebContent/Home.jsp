<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<%-- <%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%> --%>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cap Store </title>
<link type="text/css" href="resources/Css/style.css" rel="stylesheet"  />
<link type="text/css" href="resources/Css/login.css" rel="stylesheet"  />
<!-- <script src="resources/Script/SearchScript.js"></script> -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
    <script src="resources/Script/login.js"></script>
    <script src="resources/Script/scripts.js"></script>
     <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
     <script src="resources/Script/jquery-2.0.3.min.js"></script>   
  <script src="resources/Script/jquery.slides.min.js"></script>
    <link rel="stylesheet" href="resources/Css/example.css">
  <link rel="stylesheet" href="resources/Css/font-awesome.min.css">
  <link rel="stylesheet" href="resources/Css/Slider.css">
  <style>
  
  .topnav {
  position:fixed;
  overflow: hidden;
  background-color: #333;
  margin-top:22px;
  width:100%;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
  
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin:auto;
  margin-top:80px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body oncontextmenu="return false;">
<!--Header Section-->
<div class="header-tile"></div>
<div class="header" >
<div class="header-title">
<img src="C:\Users\BANTKUMA\Desktop\jspProject\WebContent\resources\Images\fly.png" border="0" class="fly" height="3px" width="30px"  />
<img src="resources/Images/fly.png" border="0" class="fly1" height="3px" width="30px"/>
<img src="resources/Images/fly.png" border="0" class="fly2" height="3px" width="30px"/>Cap Store</div>
<!--Header Section->
<!--Search Bar Starts Here-->
<!-- <form action="tsearch" method="get">
		<input type="text" class="mainSearchBar" list="awards"
			style="color: #000" title="query" type="text" id="query" name="query"
			onblur="showText()" onfocus="hideText();" value=""
			placeholder="       Search Here">
			<div id="InitializeSearch"></div> <input class="mainSubmit" value=" "
			style="position: relative; margin-left: -76px;">
	</form> -->
<form action="tsearch" method="get">
<input  type="text" class="mainSearchBar" list="awards"  
style="color: #000" title="query" type="text" id="query" name="query" onblur="showText()" 
onfocus="hideText();" value="" placeholder="       Search Here" >
<div id="InitializeSearch"></div> 
<input class="mainSubmit" value=" " id="searchbutton" type="button" style="position:relative;margin-left:-76px;">
</form>
<!--Search Bar Ends Here-->      
</div>

  <!-- Login Starts Here -->
            <div id="loginContainer">
                <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm" action="login" method="post" >
                        <fieldset id="body">
                            <fieldset>         
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" onblur="showText()"/>
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" onblur="showText()"  />
                            </fieldset>
                            
                            <input type="submit" id="login" value="Sign in" onclick="return areFieldsBlank()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="AskUserOrMerchant">Sign Up</a>
                            
                            </fieldset>
                        <span><a href="ChangePwd">Change password</a><a href="C:\Users\BANTKUMA\Desktop\jspProject\WebContent\ForgotPassword.jsp">Forgot your password?</a></span>
                    </form>
                </div>
            </div>
            <!-- Login Ends Here -->
            ${username}
             <!-- Logout Ends Here -->
             <a href="#" id="logoutButton"><span>Logout</span><em></em></a>
			 <!-- Login Ends Here -->
			 
			 <div class="topnav">
  <a class="active" href="Home.jsp">Home</a>
  <a href="#">Mobiles</a>
  <a href="#">Clothing</a>
  <a href="#">Footwears</a>
</div>
			 
			 
			 
			 
<!-- <div class="left-border"></div>
Header Section Ends Here
Menu Section
	<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.jsp'><span>Home</span></a></li>
   <li><a href='#'><span>Mobiles @ Accessories</span></a></li>
   <li><a href='#'><span>Clothing</span></a></li>
    <li><a href='#'><span>Footwears</span></a></li>
     <li><a href='#'><span>Cosmetics</span></a></li>
   <li class='last'><a href='#'><span>Computers & Accessories</span></a></li>
</ul>
</div> -->
	
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="cap.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="cap.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="cap.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>    
   
 
<!--Footer Section-->
<div class="right-border"></div>
<div class="footer">@Copyright Cap Store</div>
<div class="footer-tile"></div>
<!--Footer Section-->
</body>
</html>
