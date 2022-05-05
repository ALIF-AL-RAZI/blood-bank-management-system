<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<img src="images/bloody.png" class="logo">
	<div class="banner-text">
		<h1>Blood Bank</h1>
		<p>Give Blood to save a Life</p>
		<br><br><br>
		<h1>About us</h1>
	<link rel="stylesheet" type="text/css" href="css/h2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<div class="banner-btn">
		<br><br>
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="hospital1.php">Hospitals</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="images/menu.png" id="menu">
	</div>
	<!--About-->
	<section id="about">
		<div class="title-text">
  <div class=""align="center"
      <ul style="list-style:none;">
        </ul>
<h2>The Blood Bank is the primary supplier of blood, blood components, and plasma derivatives to local hospitals throughout the Dhaka city. We are a non-profit, community service organization and our mission is to provide a quality supply of blood components to meet the needs of the communities served by The Blood Bank, and to provide the technical support needed by the blood banking profession to achieve the highest safety and ethical standards. Also, to make blood donation 100% voluntary without any replacement donor by building individual or institutional alliance. Our vision is to develop our communities blood supply by increasing blood donations from both new and existing blood donors and optimizing component yields from each donation.</h2>
  </div>
  <br>
      <br><br>
</div>
	</section>

	
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
