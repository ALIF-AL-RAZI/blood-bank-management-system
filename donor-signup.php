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
		<p>Donor Sign Up</p>
	<link rel="stylesheet" type="text/css" href="css-main/s99.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	
	
      <br><br><br>
      <center><div class="form">
        <form action="" method="post">
        <table>
         
	<input id="d_name" type="text" name="d_name" placeholder="Name"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;"/>

	<br><br><br><br>

	
	<input id="d_address" type="text" name="d_address" placeholder="Address"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="d_email" type="text" name="d_email" placeholder="Email"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="d_phone" type="text" name="d_phone" placeholder="Phone"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	

	<select name="d_b_group" style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;">
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

	
	<input id="d_age" type="text" name="d_age" placeholder="Age"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="d_pass" type="text" name="d_pass" placeholder="Password"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br>
	
	 <tr>
            <td><input style="width: 200px; height: 40px; border: none; border-radius: 50px; background: red; " type="submit" name="sub" value="Save"></td>
          </tr>

</div>
    <?php
    if(isset($_POST['sub'])){
        $d_name=$_POST['d_name'];
        $d_address=$_POST['d_address'];
        $d_email=@$_POST['d_email'];
		$d_phone=@$_POST['d_phone'];
		$d_b_group=@$_POST['d_b_group'];
		$d_age=@$_POST['d_age'];
        $d_pass=$_POST['d_pass'];
        
 $q=$db->prepare("INSERT INTO donor(d_name,d_address,d_email,d_phone,d_b_group,d_age,d_pass) VALUES (:d_name,:d_address,:d_email,:d_phone,:d_b_group,:d_age,:d_pass)");

        
        $q->bindValue('d_name',$d_name);
        $q->bindValue('d_address',$d_address);
        $q->bindValue('d_email',$d_email);
		$q->bindValue('d_phone',$d_phone);
		$q->bindValue('d_b_group',$d_b_group);
		$q->bindValue('d_age',$d_age);
        $q->bindValue('d_pass',$d_pass);
      
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
				<li><a href="donor-signin.php">Sign In</a></li>
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