<?php 
	$server = 'localhost';
	$username = 'root';
	$password = ''; 
	$dbName = 'CollegeXYZ';

	$conn = mysqli_connect($server, $username, $password, $dbName);

	if(!$conn){
		die('Connection Error: ' . mysqli_connect_error());
	}else{
		// echo "<script>alert('Connected successfully!')</script>";
	}
 ?>