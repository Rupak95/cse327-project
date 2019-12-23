<?php  

 /**
  * define news info.
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
	<style>
#tabledesign {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tabledesign td, #tabledesign th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tabledesign tr:nth-child(even){background-color: #f2f2f2;}

#tabledesign tr:hover {background-color: #ddd;}

#tabledesign th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<title> Death_List </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#tabledesign tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
	
	
</head>
<body>
        
    <h3 align="center" style="color: #4B088A">Death Hajji List </h3>
<input type="text" class="form-control search" placeholder="Search in this table" >
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    
    <th>HID / Tracking No</th>
    <th>Name</th>
    <th>Passport No</th>
    <th>Emergency Contact No</th>
    <th>Address</th>
</tr>

<?php


 /**
  * DEFINE NAME OF DEATH  .
  */

    include('Config.php');
      $sql = "SELECT d.HID,d.First_name,d.Last_name,d.Passport_No,d.Emergency_Contact_No,h.Permanent_Address FROM death d,hajjis h WHERE d.HID=h.HID"; 

      $res=mysqli_query($db,$sql);
      if (!$res)
       {
        die("Query Failed");
      } 

      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         
         echo "<td>".$row['HID']."</td>";
         echo "<td>".$row['First_name']." ".$row['Last_name']."</td>"; 
         echo "<td>".$row['Passport_No']."</td>";
         echo "<td>".$row['Emergency_Contact_No']."</td>";
         echo "<td>".$row['Permanent_Address']."</td>";


echo "</tr>";
        
          }               ////// WHILE LOOP ENDS ///////
        
mysqli_free_result($res);

?>
    
 </table> 
</body>
</html>

<?php

 /**
  * CLOSE .
  */
 mysqli_close($db);

?>