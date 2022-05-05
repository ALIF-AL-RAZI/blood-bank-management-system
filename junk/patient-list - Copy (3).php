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
	<link rel="stylesheet" type="text/css" href="css/s8.css">
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
    <th>Blood Group</th>
    <th>Gender</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Phone Number</th>
		<th>Address</th>

  </tr>
	<?php
$q=$db->query("SELECT * FROM patient");
while ($p=$q->fetch(PDO::FETCH_OBJ)) {
	?>
	<tr>
		<td><?= $p->id; ?></td>
    <td><?= $p->name; ?></td>
    <td><?= $p->bgroup; ?></td>
	  <td><?= $p->gender; ?></td>
	  <td><?= $p->age; ?></td>
	  <td><?= $p->weight; ?></td>
	  <td><?= $p->number; ?></td>
	  <td><?= $p->address; ?></td>
  </tr>
	<?php
}
	 ?>


</table>

	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="admin.php">Information</a></li>
				<li><a href="donor-red.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="blood.php">Search Blood</a></li>
				<li><a href="patient-red.php">Patient Registration</a></li>
				<li><a href="logout.php">Log out</a></li>
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
