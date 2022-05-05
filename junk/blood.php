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
		<p>Search the Donor</p>
	<link rel="stylesheet" type="text/css" href="css/s8.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<br>
  <div class="blood">
   
    <br><br>
  <label>Blood Group: </label>
<form class="" action="" method="post">
  <select name="bgroup">
    <option>Select</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>AB+</option>
    <option>AB-</option>
    <option>O+</option>
    <option>O-</option>

    </select>
    <br>


<?php include 'map.php'; ?>
    </form>
</div>
<br></br>

<?php
if(isset($_POST['sub']))
{
  $bgroup=@$_POST['bgroup'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];


?>
	<p align="center">Donor List</p>
	<br>
	<table id="customers" style="margin: 0px auto;">

	   <tr>
		<th>ID</th>
    <th>Name</th>
    <th>Blood Group</th>
    <th>Gender</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Last Donated</th>
		<th>Phone Number</th>
		<th>Address</th>

  </tr>
		<?php
		$ql=$db->query("SELECT id, abs('$latitude' - latitude) AS a FROM location ORDER BY a LIMIT 2");
		while ($pl=$ql->fetch(PDO::FETCH_OBJ)) {
		$id=$pl->id;

	$q=$db->query("SELECT * FROM donor_regis WHERE bgroup='$bgroup' AND id='$id'");
	$count=0;
	while ($p=$q->fetch(PDO::FETCH_OBJ)) {
		?>
		<tr>

	    <?php

	        $d=$p->date;
	        $current=date("Y/m/d");
	        $month=((strtotime($current) - strtotime($d))/60/60/24)/30;

	     if($month>=3.0) {
	      ?>
	      <td><?= $p->id; ?></td>
	      <td><?= $p->name; ?></td>
	      <td><?= $p->bgroup; ?></td>
	  	  <td><?= $p->gender; ?></td>
	  	  <td><?= $p->age; ?></td>
	  	  <td><?= $p->weight; ?></td>
	      <td><?= $p->date; ?></td>
	      <td><?= $p->number; ?></td>
	    	<td><?= $p->address; ?></td>

	  <?php

	    }

	    ?>
	  </tr>
		<?php
}
	}
		 ?>
	</table>
	<?php

	}

 ?>

	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="admin.php">Information</a></li>
				<li><a href="donor-red.php">Donor Registration</a></li>
				<li><a href="donor-list.php">Donor List</a></li>
				<li><a href="patient-list.php">Patient List</a></li>
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
