<!DOCTYPE html>
<html>
<head>
	<title>Hajj Agency</title>
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
  <div class="Agency-pra">
    <p>Hajj Agency Information (Approved by Government):
    </p>
  </div>
  <div class="Agency_info">
    <?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "hajj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Agency_ID,Agency_name, Phone_No,Office_Address,Email,Hajj_Service,Umrah_Service FROM Hajj_Agency";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Agency Id: " . $row["Agency_ID"].
        " <br>Name: " . $row["Agency_name"].
        " <br>Phone No: " . $row["Phone_No"].
        " <br>Office Address: " . $row["Office_Address"].
        " <br>Hajj Service: " . $row["Hajj_Service"].
        " <br>Umrah Service: " . $row["Umrah_Service"]. 
        "<hr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
</div>

<footer class="footer">
  <p><a href= aboutus.php><font size="4px" color="white">About US</font></a></p>
  <p><font size="3px">Managed by Web-Dream Ltd on behalf of Ministry Of Religious Affairs.   
Help Desk Phone Number: 01817-098032,  Email: nhassan213@gmail.com</font></p>
</footer>


</body>
</html>