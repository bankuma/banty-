

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<%-- <%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%> --%>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
<link type="text/css" href="resources/Css/style.css" rel="stylesheet" />
<link type="text/css" href="resources/Css/login.css" rel="stylesheet" />

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
<script src="resources/Script/login.js"></script>
<script src="resources/Script/scripts.js"></script>
<script type="text/javascript">
	function empty() {
		if ((document.getElementById("n1").value) == "") {
			alert("Plz enter ID before submit");
			return false;
		}
	}
	
	function isProperAnswer(tmp){
		if ((document.getElementById("n7").value) != "") {
			var regex = /^([a-zA-Z. ]+)$/;
			var kin = tmp.value;
			if (!regex.test(kin)) {
				alert("Answer field should contain only characters");
				tmp.focus();  
				return false;
			}
		}
	}


	function isID(tmp) {

		var userid = tmp.value;
		var regex = /^([CM][_][0-9A-Za-z]+)$/;
			if (!regex.test(userid)) {
				alert("Id must be in correct format");
				tmp.value="";
				tmp.focus();
				return false;
			}
	}
	function isProperEmail(tmp){
		if ((document.getElementById("n4").value) != "") {
			var regex = /^([a-z]+[a-z0-9_.]+[@][a-z]+[.][a-z]{2,3})$/;
			var kin = tmp.value;
			if (!regex.test(kin)) {
				alert("Email Id must be in correct format(Ex-x.x@x.com)");
				tmp.focus();  
				return false;
			}
		}
	}
</script>
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
  
</style>
</head>

<body oncontextmenu="return false;">
	<!--Header Section-->

	<div class="header-tile"></div>
	<div class="header">
		<div class="header-title">
			<img src="resources/Images/fly.png" border="0" class="fly"
				height="3px" width="30px" /> <img src="resources/Images/fly.png"
				border="0" class="fly1" height="3px" width="30px" /> <img
				src="resources/Images/fly.png" border="0" class="fly2" height="3px"
				width="30px" />Cap Store
		</div>
		<!--Header Section->
<!--Search Bar Starts Here-->
		<form action="tsearch" method="get">
			<input type="text" class="mainSearchBar" list="awards"
				style="color: #000" title="Search" type="text" name="Search"
				onblur="showText()" onfocus="hideText();" value=""
				placeholder="       Search Here" />

			<datalist id="awards" list="awards" class="datalist1" />
			<select>
				<option value="Best Picture"></option>
				<option value="Best Director"></option>
				<option value="Best Adapted Screenplay"></option>
				<option value="Best Original Screenplay"></option>
			</select>
			</datalist>

			<input class="mainSubmit" value=" " type="submit"
				style="position: relative; margin-left: -76px;">
		</form>
		<!--Search Bar Ends Here-->
	</div>
	<!-- Login Starts Here -->
	<div id="loginContainer">
		<a href="#" id="loginButton"><span>Login</span><em></em></a>
		<div style="clear: both"></div>
		<div id="loginBox">
			<form id="loginForm">
				<fieldset id="body">
					<fieldset>
						<label for="email">Email Address</label> <input type="text"
							name="email" id="email" onblur="isProperEmail(this)" />
					</fieldset>
					<fieldset>
						<label for="password">Password</label> <input type="password"
							name="password" id="password" onblur="showText()" />
					</fieldset>
					<input type="submit" id="login" value="Sign in" />

				</fieldset>
				<span><a href="ChangePwd">Change password</a><a href="ForgotPwd">Forgot
						your password?</a></span>
			</form>
		</div>
	</div>
	<!-- Login Ends Here -->

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

 <div class="topnav">
  <a class="active" href="Home.jsp">Home</a>
  <a href="#">Mobiles</a>
  <a href="#">Clothing</a>
  <a href="#">Footwears</a>
</div>
	
	<!--Menu Section-->


	<!-----Middle container starts---->
	<div class="middle-container">
		<br /> <br /> <br /> <br />

<form id="forgot" action="ForgotPasswordMerchant.jsp" method="get">
        <table style="border:solid,width:700px;height:500px;">
		<h1>Enter details here to get password</h1>
		

			Email Id:<input type=text name="n4" id="n4" 
				></input>  <br>
				
			Security Question:
				    <select name="n7" id="n7">
					<option>Select your question</option>
					<option>What's your name?</option>
					<option>What's your dog name?</option>
					<option>What's your cat name?</option>
					<option>who is best friend?</option>
					<option>How are you?</option>
					<option>Who is your mentor?</option>
					<option>Who is your brother?</option>
					<option>How???</option>
					</select><br>
				
		    Security Answer:</td></tr><input type=text name="n2" id="n7" 
				onchange="return isProperAnswer(this);" /> <br> 			
					
			
			
				<input type="submit" value="SUBMIT" onclick="return empty()"/>
				
				</br>
				</table>
		</form>


	</div>
	<!-----Middle container Ends---->

	


	<!--Footer Section-->
	<div class="right-border"></div>
	<div class="footer">@Copyright Cap Store</div>
	<div class="footer-tile"></div>
	<!--Footer Section-->
</body>
</html>


<!----- Middle container starts---->






