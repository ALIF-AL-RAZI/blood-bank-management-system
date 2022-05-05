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
		<h1>Blood Bank</h1>
		<p>Sign Up</p>
	<link rel="stylesheet" type="text/css" href="css-main/s99.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	
	
      <br><br><br>
      <center><div class="form">
        <form action="" method="post">
        <table>
         
	<input id="a_name" type="text" name="a_name" placeholder="Name"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;"/>

	<br><br><br><br>

	
	<input id="a_address" type="text" name="a_address" placeholder="Address"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="a_email" type="text" name="a_email" placeholder="Email"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="a_phone" type="text" name="a_phone" placeholder="Phone"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	

	<select name="a_b_group" style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;">
		<option>Blood Group:</option>
		<option>A+</option>
		<option>A-</option>
		<option>B+</option>
		<option>B-</option>
		<option>AB+</option>
		<option>AB-</option>
		<option>O+</option>
		<option>O-</option>

		</select>
	

	<br><br><br><br>

	
	<input id="a_age" type="text" name="a_age" placeholder="Age"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="a_pass" type="text" name="a_pass" placeholder="Password"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br>
	
	 <tr>
            <td><input style="width: 200px; height: 40px; border: none; border-radius: 50px; background: red; " type="submit" name="sub" value="Save"></td>
          </tr>

</div>
    <?php
    if(isset($_POST['sub'])){
        $a_name=$_POST['a_name'];
        $a_address=$_POST['a_address'];
        $a_email=@$_POST['a_email'];
		$a_phone=@$_POST['a_phone'];
		$a_b_group=@$_POST['a_b_group'];
		$a_age=@$_POST['a_age'];
        $a_pass=$_POST['a_pass'];
        
 $q=$db->prepare("INSERT INTO acceptor(a_name,a_address,a_email,a_phone,a_b_group,a_age,a_pass) VALUES (:a_name,:a_address,:a_email,:a_phone,:a_b_group,:a_age,:a_pass)");

        
        $q->bindValue('a_name',$a_name);
        $q->bindValue('a_address',$a_address);
        $q->bindValue('a_email',$a_email);
		$q->bindValue('a_phone',$a_phone);
		$q->bindValue('a_b_group',$a_b_group);
		$q->bindValue('a_age',$a_age);
        $q->bindValue('a_pass',$a_pass);
      
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
				<li><a href="about1.php">About Us</a></li>
				<li><a href="contact1.php">Contact</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
				<li><a href="acceptor-signin.php">Login</a></li>
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