<?php
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		require_once('../config.php');
		$query="SELECT * FROM  users WHERE username='$username' AND password='$password';";
		$result=mysqli_query($conn,$query);
		$row=mysqli_num_rows($result);
		
		
			

	if ($row==1){
		session_start();
		$_SESSION ['username']=$username;
		header('location:../index.php');
	}
	else{
		header('location:./login_form.php');
	}
	
	}
?>