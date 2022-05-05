<?php
include('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>

	<img src="../picmain/main-logo.png" class="logo">
	<div class="banner-text">
		
	<link rel="stylesheet" type="text/css" href="../css-main/s1.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<div class="banner-btn">
		<br><br>
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="home-acceptor.php">Home</a></li>
				<li><a href="profile-acceptor.php">Profile</a></li>
				<li><a href="contact1.php">Contact</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
				<li><a href="../index.php">Log out</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="../images/menu.png" id="menu">
	</div>

	
		<div class="title-text" >
  <div class="" >
   
      <ul style="list-style:none;">
          <p align="center"><a href=""><u>About Us</u></a></p>
        </ul>
<h2 align="justify">It is the goal of our blood bank management project to save lives. Our goal is to build a vibrant and diverse community in which both donors and acceptors can benefit. Anyone can donate and receive blood at any time and from any location. Services are available at the user's nearest registered hospital. Our mission as a non-profit community service organization is to provide a reliable supply of blood components to meet the needs of the communities served by The Blood Bank, as well as to provide technical support to the blood banking profession in order to maintain the highest levels of safety and ethics. Also, by forming individual or institutional alliances, it is possible to make blood donation completely voluntary without the need for a replacement donor. Our goal is to expand our community's blood supply by increasing new and existing blood donations while also maximizing component yields from each donation.</h2>
  </div>
  <br>
      <br><br>
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
