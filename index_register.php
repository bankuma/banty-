<?php
session_start();
$a=mysql_connect("localhost","root","");
if($a)
{
echo "connected";
}
else
{
echo"not connected";
}
$b=mysql_select_db("blood_jugaad");
if(isset($_REQUEST["save"]))
{
$c=$_REQUEST["nm"];
$d=$_REQUEST["ad"];
$e=$_REQUEST["ag"];
$f=$_REQUEST["bg"];
$g=$_REQUEST["g"];
$h=$_REQUEST["ei"];
$i=$_REQUEST["cn"];
$j="insert into jugaad(name,address,age,blood_group,gendar,email,contact_no)values('$c','$d','$e','$f','$g','$h','i')";
$r=mysql_query($j);
if($r)
{
header('location:save.php');
}
else
{
echo"not inserted";
}

}
if(isset($_REQUEST["submit"]))
{
$z=$_REQUEST["mn"];
$y=$_REQUEST["em"];
$x=$_REQUEST["vw"];

$n="insert into views(name,email,views)values('$z','$y','$x')";
$m=mysql_query($n);
if($m)
{
header('location:save1.php');

}
else
{
echo"not shared";
}
}
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
	</script>

	</head>
	<body>
		<header style="width:1361px;height:80px;border:solid;margin-left: -7px;">
		<img src="sky1.jpg" style="width:1361px;height:80px;">
		<img src="logo.png" style="width:200px;height:80px;margin-top: -78px;margin-left: -8px;">
		<h1 style="margin-left:220px;margin-top:-40px;color:red;">BLOOD JUGAAD</h1>	
		<a href="index.php" id="x"><h3 style="margin-left:660px;margin-top:-50px;color:white;">HOME</a></h3>	
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
		<section style="width:1361px;height:670px;border:solid;margin-left:-7px;background-image: -webkit-linear-gradient(white,red,maroon);">
		<div style="width:400px;height:490px;border:solid;margin-left:30px;margin-top: 10px;background-image: -webkit-linear-gradient(gray,white,blue);">
		<form style="padding:185px;margin-left: -150px;margin-top: -180px;">
			<table cellspacing="15">
			<caption style="color:white;"><u><h2>ORGANISE A CAMP</h2><br>(REGISTERED HERE)</u></caption>
				<tr>
					<th>Name</th>
					<td><input type="text" placeholder="enter your name" name="nm" title="Only enter alphabets" pattern="^[a-zA-Z]+$" required ></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><textarea name="ad" title="Only enter alphabets" pattern="^[A-Za-z]{0,25}$" ></textarea></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><input type="text" placeholder="enter your age" name="ag" maxlength="2" required ></td>
				</tr>
				<tr>
					<th>Blood-group</th>
					<td><select name="bg">
					<option>Select your blood group</option>
					<option>A+</option>
					<option>A-</option>
					<option>AB+</option>
					<option>Ab-</option>
					<option>B+</option>
					<option>B-</option>
					<option>O+</option>
					<option>O-</option>
					</select></td>
				</tr>
				<tr>
					<th>Gendar</th>
					<td><input type="radio" required name="g">Male</td>
					<td><input type="radio" required name="g">Female</td>

				</tr>
				<tr>
					<th>Email</th>
					<td><input type="email" placeholder="enter your email-id" name="ei"  required></td>
				</tr>
				<tr>
					<th>contact-no</th>
					<td><input type="text" placeholder="enter your number" name="cn" maxlength="10" required></td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" value="Register" name="save"></td>
				</tr>

				
				
				

			</table>
		</form>
			
		</div>
		<div style="width:400px;height:290px;border:solid;margin-left:475px;margin-top: -410px;background-image: -webkit-linear-gradient(gray,white,blue);">
		<form style="margin-left: 10px;">
			<table cellspacing="25">
			<caption style="color:white;"><u><h2>SHARE YOUR VIEWS</h2></u></caption>
				<tr>
					<th>Name</th>
					<td><input type="text" required placeholder="enter your name" pattern="^[a-zA-Z]+$" name="mn"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="email" required placeholder="enter your email" name="em"></td>
				</tr>
			
				<tr>
					<th>Views</th>
					<td><textarea name="vw" pattern="^[a-zA-Z]+$"></textarea></td>
				</tr>
					<tr>
					<td ><input type="submit" value="shared" name="submit"></td>
				</tr>
				</table>
				</form>
				</div>
				<div style="width:400px;height:640px;border:solid;margin-left:920px;margin-top: -380px;background-image: -webkit-linear-gradient(gray,white,blue);">
				<h1 style="color:white;"><center><u><em>BLOOD FACTS</em></u></center></h1>
				<ul type="square">
				<li>Blood is the life-maintaining fluid that circulates through the body's heart, arteries, veins and capillaries.</li>
				<li>Blood carries to the body nourishment, electrolytes, hormones, vitamins, antibodies, heat, and oxygen.</li>
				<li>Blood carries away from the body waste matter and carbon dioxide.</li>
				<li>Blood fights against infection and helps heal wounds, keeping you healthy.</li>
				<li>Blood makes up about 7% of your body's weight.</li>
				<li>A newborn baby has about one cup of blood in his or her body.</li>
				<li>White blood cells are the body's primary defence against infection.</li>
				<li>Granulocytes, a type of white blood cell, roll along blood vessel walls to search and destroy bacteria.</li>
				<li>Red blood cells carry oxygen to the body's organs and tissues.</li>
				<li>There are about one billion red blood cells in two to three drops of blood.</li>
				<li>Red blood cells live about 120 days in the circulatory system.</li>
				<li>Blood platelets help clotting and give those with leukemia and other cancers a chance to live.</li>
				</ul>
				</div>
		</section>
		<footer style="width:1361px;height:30px;border:solid;background-color:gray;margin-left: -7px;">@copyright to bharatbloodbank.com</footer>
		</body>
		</html>










