<?php 
 /**
  * define id.
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

<title> Information of Agency Staffs </title>
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
        
    <h3 align="center" style="color: #4B088A"> Information of Agency Staffs </h3>
<input type="text" class="form-control search" placeholder="Search in this table" >
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    
    <th>Staff ID</th>
    <th>Name</th>
    <th>Sex</th>
    <th>Age</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Job Type</th>
    <th>Agency Name</th>
    

</tr>

<?php

 /**
  * total info.
  */

    include('Config.php');
      $sql = "SELECT s.Staff_ID,s.Name,s.Sex,s.Age,s.Address,s.Contact_No,s.Job_type,h.Agency_Name FROM agency_staffs s,hajj_agency h WHERE s.Agency_ID=h.Agency_ID"; 

      $res=mysqli_query($db,$sql);
      if (!$res)
       {
        die("Query Failed");
      } 

      while ($row=mysqli_fetch_assoc($res)) {

         echo "<tr>";
         
         echo "<td>".$row['Staff_ID']."</td>";
         echo "<td>".$row['Name']."</td>"; 
         echo "<td>".$row['Sex']."</td>";
         echo "<td>".$row['Age']."</td>";
         echo "<td>".$row['Address']."</td>";
         echo "<td>".$row['Contact_No']."</td>";
         echo "<td>".$row['Job_type']."</td>";
         echo "<td>".$row['Agency_Name']."</td>";


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