<?php  
 /**
  * define NEWS AND INFO.
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

<title> Physically Disable Hajji </title>
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
        
    <h3 align="center" style="color: #4B088A"> Information about Physically Disable Hajjis and Their Helper</h3>
<input type="text" class="form-control search" placeholder="Search in this table" >
<!--Search button code-->
     

<table id="tabledesign">
<tr>
    
    <th>HID</th>
    <th>Name</th>
    <th>Passpost No</th>
    <th>Disable Type</th>
    <th>Helper ID</th>
    <th>helper Name</th>
    <th>Helper Phone No</th>
    <th>Helper Address</th>
    

</tr>

<?php

 /**
  * define physical disable namme , pno. etc .
  */

    include('Config.php');
      $sql = "SELECT p.HID,h.First_name,h.Last_name,h.Passport_No,p.Disable_Type,p.Helper_ID,p.Helper_Name,p.Phone_No,p.Address FROM physically_disable p,hajjis h WHERE p.HID=h.HID"; 

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
         echo "<td>".$row['Disable_Type']."</td>";
         echo "<td>".$row['Helper_ID']."</td>";
         echo "<td>".$row['Helper_Name']."</td>";
         echo "<td>".$row['Phone_No']."</td>";
         echo "<td>".$row['Address']."</td>";


echo "</tr>";
        
          }               ////// WHILE LOOP ENDS ///////
        
mysqli_free_result($res);

?>
    
 </table> 
</body>
</html>

<?php

 /**
  * close .
  */

 mysqli_close($db);

?>