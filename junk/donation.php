<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank </title>
	<img src="images/150.png" class="logo">
	<div class="banner-text">
		<h1>Donation</h1>
		
	<link rel="stylesheet" type="text/css" href="css/s8.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
	<br>
<p align="center">Donor List</p>

<table id="customers" style="margin: 0px auto;">
  <tr>
		<th>ID</th>
    <th>Name</th>
    <th>Blood Group</th>
    <th>Gender</th>
		<th>Phone Number</th>
		<th>Address</th>
  </tr>
	<?php
$q=$db->query("SELECT * FROM donor_regis");
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
      <td><?= $p->number; ?></td>
      <td><?= $p->address; ?></td>
    <?php
    }
    ?>

  </tr>

	<?php
}
	 ?>
</table>

<br>
<p align="center">Patient List</p>

<table id="customers" style="margin: 0px auto;">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Blood Group</th>
  <th>Gender</th>
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
  <td><?= $p->number; ?></td>
  <td><?= $p->address; ?></td>
</tr>

<?php
}
 ?>
</table>

<br></br>

<div class="type">
  <h2 allign="center">Proceed a Donation</h2>
  <br><br>
<form class="" action="" method="post">
    <label style="font-size:20px">Enter ID of Donor:</label>
  <input type="text" name="did" placeholder="ID of Donor" style="font-size: 22px; width: 220px; height: 40px; border-radius: 10px;">
  &nbsp;<label style="font-size:20px">  Enter ID of Patient:</label>
  <input type="text" name="pid" placeholder="ID of Patient" style="font-size: 22px; width: 220px; height: 40px; border-radius: 10px;">
<br><br>
    <input name="sub" type="submit" value="Proceed" style="font-weight:bold;font-size: 12px; width: 90px; height: 35px;border-radius:10px;background-color:#F9054B;font-size:18px;">
<br></br>
  </form>
</div>

<?php

if(isset($_POST['sub']))
{
  $did=$_POST['did'];
  $pid=$_POST['pid'];
  $count=$db->query("SELECT count(*) FROM donor_regis WHERE id='$did'")->fetchColumn();


$q=$db->query("SELECT date FROM donor_regis WHERE id='$did'");
$d=$q->fetchColumn();
$current=date("Y/m/d");
$month=((strtotime($current) - strtotime($d))/60/60/24)/30;
if($month<3.0)
{
echo "<script>alert('Donor not Available!')</script>";
}
else {
if(!$count==0){
$qd=$db->query("SELECT * FROM donor_regis WHERE id='$did'");
$pd=$qd->fetch(PDO::FETCH_OBJ);
$dname=$pd->name;
$bdgroup=$pd->bgroup;

$qp=$db->query("SELECT * FROM patient WHERE id='$pid'");
$pp=$qp->fetch(PDO::FETCH_OBJ);
$pname=$pp->name;
$bgroup=$pp->bgroup;
$date=$current;
 if($bdgroup==$bgroup){
  $t=$db->prepare("INSERT INTO donation(dname,pname,bgroup,date) VALUES (:dname,:pname,:bgroup,:date)");
  $t->bindValue('dname',$dname);
  $t->bindValue('pname',$pname);
  $t->bindValue('bgroup',$bgroup);
  $t->bindValue('date',$date);

$u=$db->prepare("UPDATE `donor_regis` SET `date`='$date' WHERE id='$did'");

  if($t->execute() && $u->execute()){
      echo "<script>alert('Donation Succesfull')</script>";
  }
  else{
      echo "<script>alert('Donation Failed!')</script>";
  }
}
else {
  echo "<script>alert('Blood Group not matched!')</script>";
}} 
else
{
	 echo "<script>alert('Wrong ID!')</script>";
}
}}
 ?>
		<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="admin.php">Information</a></li>
				<li><a href="logout.php">Logout</a></li>
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
