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
		<h1>Blood Bank</h1>
		<p>Give Blood to save a Life</p>
	<link rel="stylesheet" type="text/css" href="../css-main/s8.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<br>
<p align="center">Patient List</p>
<br>
<table id="customers" style="margin: 0px auto;">
  <tr>
		<th>ID</th>
        <th>Name</th>
        <th>Address</th>
	    <th>Phone Number</th>
	    <th>Email</th>
	    <th>Blood Group</th>
		<th>Age</th>
		
		

    </tr>
	<?php
$q=$db->query("SELECT * FROM acceptor");
while ($p=$q->fetch(PDO::FETCH_OBJ)) {
	?>
	<tr>
		<td><?= $p->a_id; ?></td>
        <td><?= $p->a_name; ?></td>
	    <td><?= $p->a_address; ?></td>
	    <td><?= $p->a_phone; ?></td>
		<td><?= $p->a_email; ?></td>
        <td><?= $p->a_b_group; ?></td>
	    <td><?= $p->a_age; ?></td>
	  
    </tr>
	<?php
}
	 ?>


</table>

	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
			<li><a href="admin-main.php">Home</a></li>
				<li><a href="receipt-reg.php">Rgister Donation</a></li>
				<li><a href="request-list.php">Recent Request</a></li>
				<li><a href="donantion-list.php">Donation List</a></li>
				<li><a href="receipt-list.php">Patient List</a></li>
				<li><a href="../index.php">Log out</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="../images/menu.png" id="menu">
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
