<?php
$Send='';

 /**
  * ADDING PIC AND NAME.
  */

if(isset($_POST['Submit'])){
  if(empty($_POST['firstname'])|| empty($_POST['lastname'])||empty($_POST['subject'])){
      $Send="Fill All Fields.";

    }
    else
    {
      include('Config.php');
      $fname =  $_POST['firstname'];
      $lname =  $_POST['lastname'];
      $sub =  $_POST['subject'];

      $sql = "INSERT INTO `messages`(`First_name`, `Last_name`, `Message`) VALUES ('$fname','$lname','$sub')";
  
      if ($db->query($sql) === TRUE) {
      $Send="Message Send Successfully";
      } 
    else {
    echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();

    }

  }
  
  
?> 
    

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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

  
  

<!-.............................................message-box->
  <div class="container-message" style="width: 400px">
    <form action="" method="POST">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Leave a massage here..." style="height:150px"></textarea>

      <input type="submit" value="Submit" name="Submit">
      

    </form>
  </div>
  <span class="Send"><?php echo $Send;   ?></span> 
  

<!.............................................information>
  
  <div class="Contact-info">
    <h1 class="page-title"><span style="color: #1C1C1C;"> Important Contact Number</h1>
      <h2><span style="color: #008000;">For any information regarding Pre-registration or Hajj, please call<br />
            +8809602666707</h2>
      <h4><span style="color: #0A0A2A;">Makkah IT helpdesk number:    +966564053278, E-mail: makkah@hajj.gov.bd</h4>
      <h4><span style="color: #0A0A2A;">Madinah  IT helpdesk number:  +966576069022, E-mail: madinah@hajj.gov.bd</h4>
      <h4><span style="color: #0A0A2A;">Jeddah IT helpdesk number:      +966598436092, E-mail: jeddah@hajj.gov.bd</h4>
      <p>&nbsp;</p>
      <p><span style="color: #008000;"><strong>If you have any observation about Hajj Management System</strong></span></p>
      <p><span style="color: #1C1C1C;"><strong>Please call following numbers:</strong></p>
      <p><span style="color: #0A0A2A;"><strong>Director, Hajj Office, Dhaka</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 8958462, Fax: 8920960</p>
      <p><span style="color: #0A0A2A;"><strong>Assistant Hajj Officer</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 7912391</p>
      <p><span style="color: #0A0A2A;"><strong>Health Section, Hajj office</strong></p>
      <p><span style="color: #1B0A2A;">Phone: +88-027912132</p>
      <p><span style="color: #0A0A2A;"><strong>Secretary, Ministry of Religious Affairs</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 088-02-9514533, Fax: 7165040</p>
      <p><span style="color: #0A0A2A;"><strong>Bangladesh Hajj Mission, Makkah</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 00-966-2-5413980, 5413981, Fax: 00-966-2-5413982</p>
      <p><span style="color: #0A0A2A;"><strong>Bangladesh Hajj Mission, Madinah</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 00-966-04-8667220</p>
      <p><span style="color: #0A0A2A;"><strong>Bangladesh Hajj Mission, Jeddah</strong></p>
      <p><span style="color: #1B0A2A;">Phone: 00-966-2-6876908, Fax: 00-966-2-6881780</p>
      <p>&nbsp;</p>
  </div>

  <div>
  	<br>
  	<br>
  	<br>
  	<br>
  </div>

  <footer class="footer">
  <p><a href= aboutus.php><font size="4px" color="white">About US</font></a></p>
  <p><font size="3px">Managed by Web-Dream Ltd on behalf of Ministry Of Religious Affairs.Help Desk Phone Number: 01817-098032,  Email: nhassan213@gmail.com</font></p>
</footer>



</body>
</html>