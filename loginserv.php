<?php
  $error='';
  if(isset($_POST['Submit'])){
  	if(empty($_POST['username'])|| empty($_POST['password'])){
  		$error="Your Username or Password is Invalid";

  	}
  	else{
  		$admin = $_POST['username'];
  		$password = $_POST['password'];
  		$conn=mysqli_connect("localhost","root","usbw");
  		$db=mysqli_select_db($conn,"hajj");
  		$query =mysqli_query($conn,"SELECT * FROM admin
  		where passcode='$password' and  username='$admin' ");
  		$rows = mysqli_num_rows($query);
  		if($rows==1)
  		{
        $data= mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['user_id']=$data['id'];
        header("Location:All_information.php");
  		}
  		else{
  			$error="Your Username or Password is Invalid";
  		}
  		mysqli_close($conn);
  	}
  }




?>