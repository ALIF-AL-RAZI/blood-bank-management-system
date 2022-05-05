<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<img src="picmain/main-logo.png" class="logo">
	<div class="banner-text">
		
	<link rel="stylesheet" type="text/css" href="css-main/s1.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<div class="banner-btn">
		<br><br>
	<div id="sideNav">
		<nav>
			<ul>
				
				<li><a href="about1.php">About Us</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
				<li><a href="index.php">Log out</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="images/menu.png" id="menu">
	</div>

	
		<div class="title-text" >
  <div class="" >
   
      <ul style="list-style:none;">
          <p align="center"><u>Contact</u></a></p>
		  <br>
		  <li><h2 align="center">Phone: 01872792494</h2>
</li>
<li><h2 align="center">Phone: 01521799391</h2>
</li>
        </ul>

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
