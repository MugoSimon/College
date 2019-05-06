<?php
	session_start();
	include('DBConnection.php');
	$theCurrentID =  $_SESSION["currentID"];

	//Fetch student details from the form
	if(isset($_POST['insertEducation'])){

		$primaryschool = $_POST['primaryschool'];
		$highschool = $_POST['highschool'];
		$indexnumber = $_POST['indexnumber'];
		$fromdate = $_POST['fromdate'];
		$todate = $_POST['todate'];
	
		//Insert Student Details
		$insert_query_education = "INSERT INTO `educationbg` 
		(primaryschool,highschool,indexnumber,fromdate,todate,idno) 
		VALUES
		('$primaryschool','$highschool','$indexnumber','$fromdate','$todate','$theCurrentID')";

		$insert_education = mysqli_query($conn, $insert_query_education);

		
		if($insert_education){
			header("Location: parents.php");
			echo "<script>alert('Education Background Successfully approved!')</script>";
		}else{
			header("Location: education.php");
			echo "<script>alert('Education Background rejected!!!')</script>";
			/*echo "<script>alert('Error: '. mysqli_error($conn))</script>";*/
		}
	}
?>