<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank </title>
	<link rel="stylesheet" type="text/css" href="css/s4.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="banner-text">
    <div id="header"><h2><a href='index.php'style="text-decoration: none; font-size: 40px; font-family: 'Kaushan Script', cursive;color:white;">Blood Bank </a></h2></div>
		<img  src="images/150.png" class="logo">
		<br><br>
		<p>Admin Login</p>
		<div class="banner-btn">
			<section id="login">
				<div class="title-text">
  <div class=""align="center">
  	 <form action="" method="post">
      <table align="center">
        <tr>
          <td width="200px" height="50px"><b>Enter Username</b></td>
          <td width="100px" height="50px"><input type="text"name="un" placeholder="Enter Username" style="width: 150px;height: 30px;border-radius: 10px; "></td>
        </tr>
        <tr>
          <td width="200px" height="70px"><b>Enter Password</b></td>
          <td width="200px" height="70px"><input type="text"name="ps" placeholder="Enter Password" style="width: 150px;height: 30px;border-radius: 10px; "></td>
        </tr>
        <tr>
          <td><input type="submit" name="sub" value="Login" style="width: 70px; height: 40px;border-radius: 5px;" ></td>
        </tr>
      </table>
      </form>
      <?php
      if(isset($_POST['sub']))
      {
         $un=$_POST['un'];
         $ps=$_POST['ps'];
         $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
         $q->execute();
         $res=$q->fetchAll(PDO::FETCH_OBJ);
         if($res)
         {

          $_SESSION['un']=$un;
           header("Location:admin-information.php");
         }
         else
         {
           echo "<script>alert('Wrong User')</script>";
         }
      }
        ?>
    </div>
			</section>
			
	</div>
	<div class="banner-btn">
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
