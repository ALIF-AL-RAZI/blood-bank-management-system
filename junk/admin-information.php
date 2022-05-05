<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<img src="images/150.png" class="logo">
	<div class="banner-text">
		<h1>Blood Bank</h1>
		<p>Give Blood to save a Life</p>
	<link rel="stylesheet" type="text/css" href="css/s10.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	 <?php
       $un=$_SESSION['un'];
       if(!$un)
       {
         header("Location:login.php");
       }
      ?>
	<div class="banner-btn">
		<br><br>
		<br>
    <div class=""align="center">
    <img src="images/d1.jpg" ALT="some text" WIDTH=100 HEIGHT=100>
    <ul style="list-style:none;">
      <br><br>
        <a href="donation.php">Proceed to Donation</a>
        <br><br>
        <br>
  <div class=""align="center">
    <img src="images/ClipartKey_2398885.png" ALT="some text" WIDTH=100 HEIGHT=100>
    <ul style="list-style:none;">
    	<br><br>
        <a href="donor-list.php">Donor List</a>
        <br><br>
        <br>
  
  <div class=""align="center">
    <img src="images/ClipartKey_2398838.png" ALT="some text" WIDTH=120 HEIGHT=100>
    <ul style="list-style:none;">
    	<br><br>
        <a href="patient-list.php">Patient List</a>
        <br><br>
            <br>
  <div class=""align="center">
    <img src="images/ClipartKey_194780.png" ALT="some text" WIDTH=60 HEIGHT=80>
    <ul style="list-style:none;">
    	<br><br>
        <a href="donation-list.php">Donation List</a>
	</div>
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="hospital1.php">Hospitals</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</nav>
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
