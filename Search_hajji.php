<!DOCTYPE html>
<html>
<head>
    <title>News & Info</title>
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

<h1 align="center" class="Result_hajji" >Your Information:</h1>

<div class="News_Info">
    
    <?php
 /**
  * config.
  */

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

$value =  $_POST['search_h'];

$sql = "SELECT h.HID,h.First_name,h.Last_name,h.Age,h.Sex,h.Passport_No,h.Current_Address,h.Permanent_Address,h.Contact_No_BD,h.Hajj_Year,h.Hajj_type,e.Name,e.Phone_No,ha.Agency_Name,h.Guide_ID,g.Guide_Name,g.Contact_No,f.Date,f.Time FROM e_c_persons e, guides g,hajj_agency ha,hajjis h,flight_go f WHERE e.E_C_P_ID=h.E_C_P_ID and h.Agency_ID=ha.Agency_ID  and h.Guide_ID=g.Guide_ID and f.Flight_ID=h.Flight_ID_GO  and ( h.HID like '$value' or h.Passport_No like '$value')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Tracking Id: " . $row["HID"].
        "<br>".
        " <br>Name: " . $row["First_name"]." ".$row["Last_name"].
        " <br>Age: " . $row["Age"].
        " <br>Sex: " . $row["Sex"].
        " <br>Passport No: " . $row["Passport_No"].
        " <br>Current Address: " . $row["Current_Address"].
        " <br>Permanent Address: " . $row["Permanent_Address"].
        " <br>Contact No: " . $row["Contact_No_BD"].
        " <br>Hajj Year: " . $row["Hajj_Year"].
        " <br>Hajj Type: " . $row["Hajj_type"].
        "<br>".
        " <br>Emergency Contact Person: " . $row["Name"].
        " <br>Emergency Contact Number: " . $row["Phone_No"].
        "<br>".
        " <br>Agency Name: " . $row["Agency_Name"].
        " <br>Guide ID: " . $row["Guide_ID"].
        " <br>Guide Name: " . $row["Guide_Name"].
        " <br>Guide's Contact No: " . $row["Contact_No"].
        "<br>".
        " <br>Flight Date (GO): " . $row["Date"].
        " <br>Flight Time: " . $row["Time"].
        
        "<br>";
    	}
	} 
else {
    echo "Sorry... No Data Found. <br>Check your Tracking Number And Passport Number Carefully.<br>
    Then Try Again.<br>Or Contact with your Agency.<br><br><br><br><br><br><br>
    <br>";
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