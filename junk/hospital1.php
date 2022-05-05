<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank</title>
    <img src="images/150.png" class="logo">
    <div class="banner-text">
        <h1>Blood Bank</h1>
        <p>Give Blood to save a Life</p>
    <link rel="stylesheet" type="text/css" href="css/h1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
        <div id="main"> 
             <header>
                <h2>Hospital & NGO List</h2>
            </header>
            <article>
                <figure>
                        <img style="height: 8rem" src="images/pic1.jfif">
                     </figure>  
                 <div class="article-text">
                    <h2>Asgar Ali Hospital</h2>
                    <br>
                    <p>Address: Playground, 111/1/A Distillery Road, Gendaria, Beside Dhupkhola, Dhaka 1204  </p>
                    <br>
                   <p>Contact: 09666-710602</p>
                   <br>
                   <p>Hours: Open 24 hours</p>
                    <br>
                    
                    <div class="linkbutton">
                    <button style="align-items: right "><a href="https://www.facebook.com/actionaidbangladesh/">Read More</a></button></div>
                </div>
            
            </article>

            <article>
                <figure>
                        <img style="height: 8rem" src="images/pic2.jpg">
                    
                </figure>
                <div class="article-text">
                    <h2>Square Hospital</h2>
                    <br>
                    <p>Address: 18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205    </p>
                    <br>
                    <p>Contact: 01713-141447</p>
                   <br>
                   <p>Hours: Open 24 hours</p>
                    <br>
                    <div class="linkbutton">
                    <button><a href="https://www.facebook.com/actionaidbangladesh/">Read More</a></button></div>
                </div>
                
            </article>

            <article>
                <figure>
                        <img style="height: 8rem" src="images/pic3.jpg">
                        
                </figure>
                <div class="article-text">
                   <h2>ActionAid Bangladesh</h2>
                    <br>
                    <p>Address:  House SE(C)(Old 9) 5/B (old, 8 Rd 136, Dhaka 1212      </p>
                    <br>
                    <p>Contact: 02-55044851 </p>
                    <br>:
                   <p>Hours:8:30-5:30 (Friday & Saturday)Closed </p>
                   <br>
                    <div class="linkbutton">
                    <button style=" align-items: center"><a href="https://www.facebook.com/actionaidbangladesh/">Read More</a></button></div>
                </div>
              

            </article>

        </div>
    



    
    <div class="banner-btn">
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="abt.php">About Us</a></li>
                <li><a href="admin-login.php">Admin</a></li>
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
