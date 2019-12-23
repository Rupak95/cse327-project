<?php  
    include('Config.php');
    session_start();
    if(!isset($_SESSION['user_id'])){
      header("location:login.php");
   }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add_information</title>
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


<h1 align="center" style="color: #FFFFFF">Hajji Information</h1>
<div class="back">.
        <a href = "All_information.php"><img src="Images/back-button.png"></a>
      </div>

<div class="addinfohajji">
	<form name="form1" action="" method="post">
<table id="admin_panel_design">
<tr>
	<td>Insert HID:</td>
	<td><input type="text" name="t1" placeholder="Must be Unique"></td>
</tr> 
<tr>
	<td>Insert First name:</td>
	<td><input type="text" name="t2" placeholder="ex. MD Nahid"></td>
</tr> 
<tr>
	<td>Insert Last name:</td>
	<td><input type="text" name="t3" placeholder="ex. Hassan"></td>
</tr>
<tr>
	<td>Insert Age:</td>
	<td><input type="text" name="t4" placeholder="ex. 21"></td>
</tr>
<tr>
	<td>Insert Sex:</td>
	<td><input type="text" name="t5" placeholder="ex. Male"></td>
</tr><br/>
<tr>
	<td>Insert Passport No:</td>
	<td><input type="text" name="t6" placeholder="ex. BN0543423"></td>
</tr>
<tr>
	<td>Insert Current Address:</td>
	<td><input type="text" name="t7" placeholder="ex. Banani,Dhaka"></td>
</tr>
<tr>
	<td>Insert Permanent Address:</td>
	<td><input type="text" name="t8" placeholder="ex. Manikganj"></td>
</tr>
<tr>
	<td>Insert Contact_No:</td>
	<td><input type="text" name="t9" placeholder="ex. 01817098032"></td>
</tr>
<tr>
	<td>Insert Hajj Year:</td>
	<td><input type="text" name="t10" placeholder="ex. 2018"></td>
</tr>
<tr>
	<td>Insert Hajj Type:</td>
	<td><input type="text" name="t11" placeholder="ex. Hajj/Umrah"></td>
</tr>
<tr>
	<td>Insert E_C_P_ID:</td>
	<td><input type="text" name="t12" placeholder="ex. 07"></td>
</tr>
<tr>
	<td>Insert Agency_ID:</td>
	<td><input type="text" name="t13" placeholder="ex. 107"></td>
</tr>
<tr>
	<td>Insert Guide_ID:</td>
	<td><input type="text" name="t14" placeholder="ex. 10"></td>
</tr>

<tr>
	<td colspan="5" align="center"> 
	<input type="submit" name="submit1" value="Insert" > 
	<input type="submit" name="submit2" value="Delete" > 
	</td>
	
</tr>
</table>
</form>
</div>


	
<div class="Submittedreport">
	<?php

 if(isset($_POST["submit1"]))
 {
 	mysqli_query($db,"INSERT into hajjis values ('$_POST[t1]','$_POST[t2]','$_POST[t3]',
 		'$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]','0','0','0','0') ");

 	
 	passthru('$(tput sgr0)');
 	echo "Information Successfully Submitted.(If you gave it correctly)";
 }


 if(isset($_POST["submit2"]))
 {
 	mysqli_query($db,"DELETE FROM hajjis where HID='$_POST[t1]' ");

 	passthru('$(tput sgr0)');
 	echo "Information Successfully Deleted.(If you put valid HID)";
 }

 mysqli_close($db);

?>
</div>






<div id="box">
<ul>
	<li>For inserting a new member insert data in all boxes and click insert</li>
	<li>For deleting a member insert member_id in the first box and click delete</li>
</ul>
</div>


</body>
</html>