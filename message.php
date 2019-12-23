 <?php
 /**
  * MESSAGE .
  */

include('Config.php');
$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$subject =  $_POST['subject'];

$sql = "INSERT INTO `messages`(`First_name`, `Last_name`, `Message`) VALUES ('$firstname','$lastname','$subject')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?> 