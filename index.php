<!DOCTYPE html>
<html>
<head>
  <title>Bangladesh Hajj Management System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#071019;">
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
?> 
<div id="wholepage">

  <!....................................................Header>
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
      <!....................................................Main-nav>
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
  <!...............................................................................Text-slide-show>
  <div class="Text-slide-show" style="height: 40px">
  	<p class="item-1">The Hajj is an Islamic pilgrimage to Makkah and the largest gathering of Muslim people in the world every year.</p>

	<p class="item-2">Last year, about 2 million pilgrims from 188 countries performed the Hajj.</p>

	<p class="item-3">In 2017, a total number of 1,27,198 pilgrims will be able to perform Haj from Bangladesh.</p>
  	
  </div>
  	

<!....................................................Slide-show>
   <div class="slideshow-container" style="width: 1225px">
  		<div class="mySlides fade">
    		<img src="Images/image-1.jpg" width="100%" height="500">
  		</div>
  
  		<div class="mySlides fade">
    		<img src="Images/image-2.jpg" width="100%" height="500">
  		</div>

  		<div class="mySlides fade">
    		<img src="Images/image-3.jpg" width="100%" height="500">
  		</div>

  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span>
  		<span class="dot" onclick="currentSlide(2)"></span>
  		<span class="dot" onclick="currentSlide(3)"></span>
	</div> 
</div>	


<!....................................................Java-script>

<script type="text/javascript">
  	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
  	showSlides(slideIndex += n);
	}

	function currentSlide(n) {
  	showSlides(slideIndex = n);
	}

	function showSlides(n) {
  	var i;
  	var slides = document.getElementsByClassName("mySlides");
  	var dots = document.getElementsByClassName("dot");
  	if (n > slides.length) {slideIndex = 1}
  	if (n < 1) {slideIndex = slides.length}
  	for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  	}
  	for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  	}
  	slides[slideIndex-1].style.display = "block";
  	dots[slideIndex-1].className += " active";
	} 
	var slideIndex = 0;
	showSlides();

	function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides,4000); 
	}
</script>

<div>
   <div class="hajjrule">
        <img src="Images/hajjrule.png" width="600">
    </div>
</div>

<div class="makkah">
    <img src="Images/makkah.jpg">
    <br>
    <p><font size="4px">Mecca or Makkah is a city in the Tihamah plain in Saudi Arabia that is also the capital and administrative headquarters of the Makkah Region. The city is located 70 km (43 mi) inland from Jeddah in a narrow valley at a height of 277 m (909 ft) above sea level, and 340 kilometres (210 mi) south of Medina.</font></p>
      
  </div>

  <div class="madinah">
    <img src="Images/madinah.jpg">
    <br>
    <p><font size="4.5 px">Medina also transliterated as Madīnah, is a city and administrative headquarters of the Al-Madinah Region of Saudi Arabia. At the city's heart is al-Masjid an-Nabawi ("the Prophet's Mosque"), which is the burial place of the Islamic prophet Muhammad, and is the second-holiest city in Islam after Mecca.</font></p>
      
  </div>
<div class="adminlogin">.
        <a href = "Login.php"><img src="Images/adminlogin.png"></a>
      </div>


<footer class="footer">
  <p><a href= aboutus.php><font size="4px" color="white">About US</font></a></p>
  <p><font size="3px">Managed by Web-Dream Ltd on behalf of Ministry Of Religious Affairs.   
Help Desk Phone Number: 01817-098032,  Email: nhassan213@gmail.com</font></p>
</footer>
	  

</body>
</html>