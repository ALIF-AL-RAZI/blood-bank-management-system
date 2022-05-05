<?php
include('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<img src="../picmain/main-logo.png" class="logo">
	
		
	<link rel="stylesheet" type="text/css" href="../css-main/profile.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>

<div class="banner-text">
	<div class="banner-btn">
	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="about1.php">About Us</a></li>
				<li><a href="contact1.php">Contact</a></li>
				<li><a href="hospital-list.php">Hospitals</a></li>
				<li><a href="../index.php">Logout</a></li>
			</ul>
		</nav>
	  </div>
     </div>
	<div id="menuBtn">
		<img src="../images/menu.png" id="menu">
	</div>
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


<script>
var res = localStorage.getItem("textvalue");
console.log(res);
</script>'

	
        <div class="profile">
          <h3 class="m-profile">My Profile</h3>
          <ul>
            <?php
            
            $un=$_SESSION['un'];
            
              if(!$un)
              {
                header("Location:donor-signin.php");
              }
             


             $q=$db->query("SELECT *  FROM donor where d_id='$un'  ");
             while ($p=$q->fetch(PDO::FETCH_OBJ)) {
                ?>
            <li>
                <span class="Id">ID:</span>
                <span class="text"><?= $p->d_id; ?></span>
            </li>
            <li>
                <span class="Id">Name:</span>
                <span class="text"><?= $p->d_name; ?></span>
            </li>
            <li>
                <span class="Id">Address:</span>
                <span class="text"><?= $p->d_address; ?></span>
            </li>
            <li>
                <span class="Id">Phone:</i></span>
                <span class="text"><?= $p->d_phone; ?></span>
            </li>
            <li>
                <span class="Id">Email:</span>
                <span class="text"><?= $p->d_email; ?></span>
            </li>
            <li>
                <span class="Id">Age:</span>
                <span class="text"><?= $p->d_age; ?></span>
            </li>
            <li>
                <span class="Id">Blood Group:</i></span>
                <span class="text"><?= $p->d_b_group; ?></span>
                
            </li>
            <?php
            }
	          ?>
            </ul>

        </div>
    
    
    <br><br><br>
    <br><br><br><br>


    

<div class="">

               <p align="center">Donation History</p>

                <table id="customers" style="margin: 0px auto;">
              <tr>
              <th>Test Date</th>
              <th>Hospital</th>

            </tr>
           <?php
             $q=$db->query("SELECT h_id, test_date  FROM donates_to where d_id='$un'");
             while ($p=$q->fetch(PDO::FETCH_OBJ)) {
                ?>
             <tr>
                <td><?= $p->test_date; ?></td>
             <td><?= $p->h_id; ?></td>
      
           </tr>
           <?php
            }
	          ?>

        </table>

        </div>
        <br><br><br><br><br><br>
        <div class="">
        
      <p align="center">Blood test status</p>

        <table id="customers" style="margin: 0px auto;">
            <tr>
              <th>Test Date</th>
              <th>Hospital</th>

            </tr>
      <?php
      $q=$db->query("SELECT test_date, disease  FROM diagnosis where d_id='$un and test_date=max(test_date)'");
         while ($p=$q->fetch(PDO::FETCH_OBJ)) {
     ?>
      <tr>
        <td><?= $p->test_date; ?></td>
        <td><?= $p->disease; ?></td>
      
      </tr>
      <?php
      }
	   ?>


    </table>

    </div>
    
</body>
</html>