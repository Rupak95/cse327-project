<?php

 /**
  * define servername
*define password .
  */

 $servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "hajj";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>