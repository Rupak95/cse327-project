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

<title>All_Hajjis_Information</title>
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
        
    <h3 align="center" style="color: #4B088A">All Hajji's Information </h3>
<input type="text" class="form-control search" placeholder="Search in this table" >

     

<table id="tabledesign">
<tr>
    
    <th>HID/Tracking ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Passport No</th>
    <th>Current Address</th>
    <th>Permanent Address</th>
    <th>Contact No</th>
    <th>Hajj Year</th>
    <th>Hajj Type</th>
    <th>ECPID</th>
    <th>Agency Name</th>
    <th>Guide Name</th>
</tr>





<?php


 /**
  * add info.
  */

    include('Config.php');
      $sql = "SELECT h.HID,h.First_name,h.Last_name,h.Age,h.Sex,h.Passport_No,h.Current_Address,h.Permanent_Address,h.Contact_No_BD,h.Hajj_Year,h.Hajj_type,h.E_C_P_ID,ha.Agency_Name,h.Guide_ID,g.Guide_Name FROM guides g,hajj_agency ha,hajjis h WHERE h.Agency_ID=ha.Agency_ID and h.Guide_ID=g.Guide_ID"; 

      $res=mysqli_query($db,$sql);
      if (!$res)
       {
        die("Query Failed");
      } 

      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         
         echo "<td>".$row['HID']."</td>";
         echo "<td>".$row['First_name']."</td>";
         echo "<td>".$row['Last_name']."</td>"; 
         echo "<td>".$row['Age']."</td>";
         echo "<td>".$row['Sex']."</td>";
         echo "<td>".$row['Passport_No']."</td>";
         echo "<td>".$row['Current_Address']."</td>";
         echo "<td>".$row['Permanent_Address']."</td>";
         echo "<td>".$row['Contact_No_BD']."</td>";
         echo "<td>".$row['Hajj_Year']."</td>";
         echo "<td>".$row['Hajj_type']."</td>";
         echo "<td>".$row['E_C_P_ID']."</td>";
         echo "<td>".$row['Agency_Name']."</td>";
         echo "<td>".$row['Guide_Name']."</td>";

echo "</tr>";
        
          }               ////// WHILE LOOP ENDS ///////
        
mysqli_free_result($res);

?>


    
 </table> 
</body>
</html>

<?php

 /**
  * close.
  */

 mysqli_close($db);

?>