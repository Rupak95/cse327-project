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


<div class="Find_hajji">
        <img src="Images/text.png">
      </div>

 <div id="Info_page">

    
    <form id="searchForm" method="POST" action="Search_hajji.php">
		<fieldset>
        
           	<input id="s" type="text" name="search_h" placeholder="Search Pilgrim by Tracking ID or Passport No..." />
            
            <input type="submit" value="Submit" id="submitButton" />
            
        </fieldset>
    </form>

    
</div>



<div class="moreinfopic">
	<a href = "Login.php"><img src="Images/moreinfo3.png"></a>
</div>



<footer class="footer">
  <p><a href= aboutus.php><font size="4px" color="white">About US</font></a></p>
  <p><font size="3px">Managed by Web-Dream Ltd on behalf of Ministry Of Religious Affairs.   
Help Desk Phone Number: 01817-098032,  Email: nhassan213@gmail.com</font></p>
</footer>

</body>
</html>