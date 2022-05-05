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
		<p>Sign Up</p>
	<link rel="stylesheet" type="text/css" href="css/s9.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	
	
      <br><br><br>
      <center><div id="form">
        <form action="" method="post">
        <table>
         <label for="first" >First Name:</label>
	<input id="fname" type="text" name="fname" placeholder="First Name"  autofocus required />

	<br><br><br><br>

	<label for="lname" >Last Name:</label>
	<input id="lname" type="text" name="lname" placeholder="Last Name"  autofocus required />

	<br><br><br><br>

	<label for="email" >Email:</label>
	<input id="email" type="text" name="email" placeholder="Email"  autofocus required />

	<br><br><br><br>

	<label for="password" >Password:</label>
	<input id="Password" type="text" name="pass" placeholder="Password"  autofocus required />

	<br>
	

	 <tr>
            <td><input style="	height: 2rem;
    width: 100px;
	text-decoration: none;
	display: inline-block;
	margin: 0 10px;
	padding: 12px 0;
	color: #fff;
	background-color: #FD8D10;
	border: .5px solid #DC143C;
	position: relative; 
	z-index: 1;
	transition: color 0.5s;" type="submit" name="sub" value="Save"></td>
          </tr>

</div>
    <?php
    if(isset($_POST['sub'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=@$_POST['email'];
        $pass=$_POST['pass'];
        
 $q=$db->prepare("INSERT INTO login(fname,lname,email,pass) VALUES (:fname,:lname,:email,:pass)");

        
        $q->bindValue('fname',$fname);
        $q->bindValue('lname',$lname);
        $q->bindValue('email',$email);
        $q->bindValue('pass',$pass);
      
      if($q->execute())
            {
              echo "<script>alert('Sign Up Successfull')</script>";
            }
            else
            {
              echo "<script>alert('Sign Up Fail')</script>";
            }
         } 
           ?>
      </div></center>
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