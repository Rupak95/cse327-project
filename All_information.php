<?php  

 /**
  * define .
  */


include('Config.php');
	session_start();
	if(!isset($_SESSION['user_id'])){
      header("location:login.php");
   }
?>



<!DOCTYPE html>
<html>
<head>

<title>All_Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color:#071019;">

	<header>
    
    <div class="logo">.
        <img src="Images/logo.jpg">
      </div>
    <div class="name">
        <img src="Images/name.png">
      </div>
      <form method="POST" action="Search_hajji.php" id="search">
        <input name="search_h" type="text" size="40" placeholder="Search..." />
      </form>
      
      <div class="row">
      <ul class="main-nav">
        <li><a href="index.php"> Home </a></li>
        <li><a href="News & Info.php"> News & Info </a></li>
        <li><a href="Hajj_Agency.php"> Hajj Agency </a></li>
        <li><a href="Notices.php"> Notices </a></li>
        <li><a href="Guide.php"> Guide </a></li>
        <li><a href="Contact.php"> Contact </a></li>
      </ul>
    </div>

  </header>
  <hr>
  
<div class="logout">.
        <a href = "logout.php"><img src="Images/logout-hi.png"></a>
      </div>
  <div class="containeradd">
  <a href = "addinfohajji.php"><img src="Images/add-property.png" alt="" style="width:80%;"></a>
  
  <div class="centered">ADD OR DELETE INFO</div>
</div> 
  
  
  <div class="All_info_menu">

  <li><a href = "All_hajji.php">All Hajji</a></li>
  <li><a href = "Death.php">Death</a></li>
  <li><a href = "Accident.php">Accident</a></li>
  <li><a href = "Monazzem.php">Monazzem</a></li>
  <li><a href = "Agency_staffs.php">Agency Staffs</a></li>
  <li><a href = "Hajj_Packages.php">Hajj Packages</a></li>
  <li><a href = "Umrah_Packages.php">Umrah Packages</a></li>
  <li><a href = "User_messages.php">User Messages</a></li>
  <li><a href = "Hotel.php">Hotel's Information</a></li>
  <li><a href = "Physically_Disable.php">Physically Disable Hajji</a></li>
  <li><a href = "Emergency_C_P.php">Emergency Contact Persons</a></li>
  
  
  </div>

 <div>
 	<br>
 </div>

 
  <footer class="footer">
  <p><a href= aboutus.php><font size="4px" color="white">About US</font></a></p>
  <p><font size="3px">Managed by Web-Dream Ltd on behalf of Ministry Of Religious Affairs.   
Help Desk Phone Number: 01817-098032,  Email: nhassan213@gmail.com</font></p>
</footer>

</body>
</html>
