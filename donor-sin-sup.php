<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank</title>
	
<img src="picmain/main-logo.png" class="logo">

	<div class="banner-text">
		<h1>Blood Bank</h1>
		<p>Blood Donation</p>
	<link rel="stylesheet" type="text/css" href="css-main/s5.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<div class="banner-btn">
		<a href="donor-signin.php">Login</a>
		<a href="donor-signup.php">Sign Up</a>
	</div>
	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about1.php">About Us</a></li>
				<li><a href="contact1.php">Contact</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="images/menu.png" id="menu">
	</div>
	

<script>
		var menuBtn=document.getElementById("menuBtn")
		var sideNav=document.getElementById("sideNav")
		var menu=document.getElementById("menu")

				menuBtn.onclick=function(){
					if(sideNav.style.right=="-250px"){
						sideNav.style.right="0";
						}
					else{
						sideNav.style.right="-250px";
						
					}
}
	</script>

</body>
</html>
