<?php
	session_start();
	include ('DBConnection.php');

	//Fetch student details from the form
	$confirm_submit = isset($_POST['submit']);
	if($confirm_submit){
		$firstname = $_POST['firstname'];
		$secondname = $_POST['secondname'];
		$lastname = $_POST['lastname'];
		$dob = $_POST['dob'];
		$IDNO = $_POST['idno'];
		$_SESSION["currentID"] = $IDNO;
		$gender = $_POST['gender'];
		$maritalstatus = $_POST['maritalstatus'];
		$regno = $_POST['regno'];
		$program = $_POST['program'];
		$telno = $_POST['telno'];
		$email = $_POST['email'];
		$homeaddress = $_POST['homeaddress'];
		$religion = $_POST['religion'];
	
		//Insert Student Details
		$insert_query_student = "INSERT INTO `students` 
		(firstname,secondname,lastname,dob,idno,gender,maritalstatus,regno,program,telno,email,homeaddress,religion) 
		VALUES
		('$firstname','$secondname','$lastname','$dob','$IDNO','$gender','$maritalstatus','$regno','$program','$telno','$email','$homeaddress','$religion')";

		$insert_student = mysqli_query($conn, $insert_query_student);
		
		if($insert_student){	
			header("Location: education.php");
			echo "<script>alert('Student Details Successfully approved!')</script>";
		}else{
			header("Location: student.php");
			echo "<script>alert('Student Rejected!!!')</script>";
			/* echo "<script>alert('Error: '. $insert_student . '<br>' . mysqli_error($conn))</script>";*/
		}
	}
?>