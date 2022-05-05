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
		<p>Donation List</p>
	<link rel="stylesheet" type="text/css" href="css-main/s8.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<br>
<br>
<table id="customers" style="margin: 0px auto;">
  <tr>
		<th>Donation ID</th>
    <th>Donor Name</th>
    <th>Patient Name</th>
    <th>Blood Group</th>
    <th>Date</th>

  </tr>
	<?php
$q=$db->query("SELECT * FROM donation");
while ($p=$q->fetch(PDO::FETCH_OBJ)) {
	?>
	<tr>
		<td><?= $p->donationid; ?></td>
    <td><?= $p->dname; ?></td>
    <td><?= $p->pname; ?></td>
	  <td><?= $p->bgroup; ?></td>
	  <td><?= $p->date; ?></td>
  </tr>
	<?php
}
	 ?>


</table>
	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#">Hospitals</a></li>
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
