<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<div class="banner-text">
		
	<link rel="stylesheet" type="text/css" href="adminn.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>


	 <?php
       $un=$_SESSION['un'];
	   
       if(!$un)
       {
         header("Location:donor-signin.php");
       }
      ?>
        <div class="container">
		    <div class="left">
			   
				<div class="a">
				<a href="donor-list.php">Donor List</a>

                </div>
				<div class="a">
				<a href="donates-to-list.php">Donation List</a>

                </div>


            </div>
			<div class="right">
			<div class="a">

<a href="patient-list.php">Acceptor List</a>
 </div>
			       <div class="a">
				   <a href="request-reg.php">Request</a>

                    </div>
                    
	   
	    </div>


	<div class="banner-btn">
		<br><br>
		<br>



	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="profile-acceptor.php">Profile</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
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
