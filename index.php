
<?php
session_start();
?>
<html>
	<head>
	<title>blood_jugaad</title>
	<script src="index_js.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
			$(document).ready(function()
{
	$("#z").click(function()
	{
		$("#y").slideToggle(2000);
	});
});
						$(document).ready(function()
{
	$("#r").click(function()
	{
		$("#j").slideToggle(2000);
	});
});
	</script>

	</head>
	<body>
		<header style="width:1361px;height:80px;border:solid;margin-left: -7px;">
		<img src="sky.jpg" style="width:1361px;height:80px;">
		<img src="logo.png" style="width:200px;height:80px;margin-top: -78px;margin-left: -8px;">
		<h1 style="margin-left:220px;margin-top:-40px;color:red;">BLOOD JUGAAD</h1>	
		<h3 style="margin-left:660px;margin-top:-50px;color:white;">HOME</h3>	
		<a href="index_images.php" style="color:white;"><h3  style="margin-left:760px;margin-top:-42px;">IMAGES</a></h3>	
		<a href="index_about.php" style="color:white";><h3  style="margin-left:878px;margin-top:-42px;">ABOUT</a></h3>	
		<a href="index_contact.php" style="color:white";><h3 style="margin-left:985px;margin-top:-40px;color:white;">CONTACT</a></h3>
		<div class="donor"   style="margin-left:1100px;margin-top:-45px;width:240px;height:35px;float:top;position: absolute;">
		<h3 id="z" style="color:white;margin-top: 5px;">DONOR'S INFORMATION</h3>
		<div id="y" style="width:240px;height:200px;border:solid white;margin-left:-5px;margin-top:-5px;display:none;float:top;position: absolute;background-color:black; ">
			<div style="width:100px;height:130px;border:solid white;margin-top: 30px;margin-left: 10px;">
				<ul type="square" style="color:white;">
				<a href="donation.php" id="x"><li>B+</a></li>
				<a href="donation.php" id="x"><li>B-</a></li>
				<a href="donation.php" id="x"><li>AB+</a></li>
				<a href="donation.php" id="x"><li>AB-</a></li>
				</ul>
			</div>
			<div style="width:100px;height:130px;border:solid white;margin-top: -135px;margin-left: 130px;">
				<ul type="square" style="color:white;">
				<a href="donation.php" id="x"><li>A+</a></li>
				<a href="donation.php" id="x"><li>A-</a></li>
				<a href="donation.php" id="x"><li>O+</a></li>
				<a href="donation.php" id="x"><li>O-</a></li>
				</ul>
			</div>
		</div>
		</div>		
		</header>
		<section style="width:1361px;height:1000px;border:solid;margin-left:-7px;background-image: -webkit-linear-gradient(white,red,maroon);">
		<img src="blood6.jpg" style="width:1300px;height:480px;margin-left: 37px;">
		<div style="width:500px;height:320px;border:solid;background-image: url(nightsea.jpg);background-size: 100%;margin-left: 20px;margin-top: 20px;">
			<h1 style="color:lime;">What are you trying to achieve??</h1>
			<h3  style="color:white;">Blood jugaad is an organisation that aims at reaching out to those who are in need of medical helo.We basically help those patients who require blood donation.Our organozation is spread around the country in various locations.In order to collect  blood donation we set donation camps in various locations.The collected donations are then provided to those who have applied on our website otherwise the collected donation are donoted to nearby hospitals.</h3>
		</div>
		<div  style="width:500px;height:320px;border:solid;margin-left: 850px;margin-top: -330px;background-image:url(blood5.jpg);">
		<h1 style="color:red;"><center> ARE YOU READY TO SAVE A LIFE?? </center></h1>
		<h2 style="color:black;">You can be one of 36,599 registered on BLOOD JUGAAD</h2>
		<h3 style="color:darkblue;">Blood_jugaad.org a non-profit,non commercial interface was born out of our social commitment and our desire to use the power of the internet to help common people.</h3>
		<h3 style="color:black;">WANT TO SAVE A LIFE?</h3>
		<a href="index_register.php"><button id="k" style="width:120px;height:40px;background-color:blue;color:white;border-radius: 10px;margin-left: 190px;">Register FREE</button></a>
		</div>
		<div id="r" style="width:300px;height:100px;border:solid;margin-left:535px;margin-top:-323px;border-radius:20px;background-image: -webkit-linear-gradient(yellow,white); ">
		<h1 id="w">TIP</h1><br>
		<h3><center>Tips of a successful donation</center></h3>
		<h4 id="v" >Click here for the information</h4>
		
		<div id="j" style="width:295px;height:220px;border:solid black;margin-top:25px;display:;float:top;position: absolute;border-radius: 50px;display:none;">
		<img src="bl1.jpg" style="width:295px;height:220px;border-radius: 50px;">
				<a href="index_readmore.php"><button id="k" style="width:55px;height:35px;background-color:black;color:white;border-radius: 10px;margin-left: 215px;margin-top:-37px;">Read more</button></a>
		</div>	
		</div>	
		<div style="width:250px;height:120px;border:solid;margin-left:135px;margin-top:250px;border-radius:20px;background-image: -webkit-linear-gradient(gray,white,pink); ">
		<h1><center><font color="blue">Blood Facts</font></center></h1>
		<img src="blood.jpg" style="width:75px;height:69px;margin-top: -20px;margin-left: 8px;">
			<h4 style="margin-top: -60px;margin-left: 83px;">A Whole World in itself,<br>blood is living matter!</h4>
			<a href="index_register.php"><button id="k" style="width:40px;height:25px;background-color:black;color:white;border-radius: 10px;margin-left: 193px;margin-top:-22px;"><<</button></a>
		</div>
		<div style="width:250px;height:120px;border:solid;margin-left:910px;margin-top:-128px;border-radius:20px;background-image: -webkit-linear-gradient(gray,white,blue); ">
		<h1><center><font color="blue">Share Your Experience</font></center></h1>
		<img src="blood1.jpg" style="width:75px;height:69px;margin-top: -20px;margin-left: 8px;">
			<h4 style="margin-top: -60px;margin-left: 95px;">Blood donation and<br>saving one's life is worth sharing!</h4>
			<a href="index_register.php"><button id="k" style="width:40px;height:25px;background-color:black;color:white;border-radius: 10px;margin-left: 199px;margin-top:-37px;"><<</button></a>
		</div>
		</section>
		<footer style="width:1361px;height:80px;border:solid black;background-color:grey;margin-left:-7px;"><h4>@copyright to blood jugaad.org</h4>
		<a href="https://www.facebook.com/search/top/?q=blood%20jugaad"><img src="fb.png" style="width:80px;height:80px;border-radius: 100%;margin-left: 700px;margin-top: -60px;"></a>
		<a href="index_contact.php"><img src="wb.png" style="width:80px;height:80px;border-radius: 100%;margin-left: 830px;margin-top: -80px;"></a>
		<a href="https://support.hike.in/access/unauthenticated"><img src="hike.jpg" style="width:80px;height:75px;border-radius: 100%;margin-left: 960px;margin-top: -80px;"></a>
		<a href="https://www.instagram.com/?hl=en"><img src="insta.jpg" style="width:80px;height:80px;border-radius: 100%;margin-left:1090px;margin-top: -80px;"></a>




		</footer>

	</body>

</html>






















