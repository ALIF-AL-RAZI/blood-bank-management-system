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
		<p>Blood Donation</p>
	<link rel="stylesheet" type="text/css" href="../css-main/s12.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
<br><br><br>
      <center><div class="form">
        <form action="" method="post">
        <table>

		<input id="Tec_id" type="text" name="Tec_id" placeholder="Your ID"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;"/>

	<br><br><br><br>
         
	<input id="d_id" type="text" name="d_id" placeholder="Donor ID"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;"/>

	<br><br><br><br>

	
	<input id="disease" type="text" name="disease" placeholder="Ditected Diseases:"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />

	<br><br><br><br>

	
	<input id="test_date" type="date" value="2022-01-01" name="test_date" placeholder="Date"  style="width: 150px;height: 30px;border: none; border-bottom: 2px solid aqua;" />
	

	
	
	<br>
	
	 <tr>
            <td><input style="width: 200px; height: 40px; border: none; border-radius: 50px; background: red; " type="submit" name="sub" value="Save"></td>
          </tr>

</div>




<?php
    if(isset($_POST['sub'])){
        $d_id=$_POST['d_id'];
		$Tec_id=$_POST['Tec_id'];
        $disease=$_POST['disease'];
        $test_date=@$_POST['test_date'];
		
        
 $q=$db->prepare("INSERT INTO diagnosis(d_id,test_date,Tec_id, disease) VALUES (:d_id,:test_date,:Tec_id,:disease)");

        
 $q->bindValue('d_id',$d_id);
 $q->bindValue('Tec_id',$Tec_id);
 $q->bindValue('disease',$disease);
 $q->bindValue('test_date',$test_date);
		
      
      if($q->execute())
            {
              echo "<script>alert('Diagnosis Registered Successfull')</script>";
            }
            else
            {
              echo "<script>alert('Diagnosis Registered Unsuccessfull')</script>";
            }
         } 
           ?>

	 
      </div></center>
    </div>

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