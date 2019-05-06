<?php 
	session_start();
	include('DBConnection.php');
	$theCurrentID = $_SESSION["currentID"];
	
	if(isset($_POST['insertParent'])){
		// parent details
		$selected_choice = $_POST['selected'];
		$mother_firstname = $_POST['mother_firstname'];
		$mother_lastname = $_POST['mother_lastname'];
		$mother_email = $_POST['mother_email'];
		$mother_contact = $_POST['mother_contact'];
		$father_firstname = $_POST['father_firstname'];
		$father_lastname = $_POST['father_lastname'];
		$father_email = $_POST['father_email'];
		$father_contact = $_POST['father_contact'];
		// guardian details
		$guardian_firstname = $_POST['guardian_firstname'];
		$guardian_lastname = $_POST['guardian_lastname'];
		$guardian_email = $_POST['guardian_email'];
		$guardian_contact = $_POST['guardian_contact'];

		//Insert Student Details
		if($selected_choice == "Parents"){
			$insert_query_parents = "INSERT INTO `parents` 
			(mother_firstname,mother_lastname,mother_email,mother_contact,father_firstname,father_lastname,father_email,father_contact,idno)VALUES
			('$mother_firstname','$mother_lastname','$mother_email','$mother_contact','$father_firstname','$father_lastname','$father_email','$father_contact','$theCurrentID')";
			$insert_parents = mysqli_query($conn, $insert_query_parents);
			if($insert_parents){
				echo "<script>alert('Parental Details Successfully approved!')</script>";
				//remove all session variables
				session_unset();
				//destroy the session
				session_destroy();
				header("Location: index.php");
			}else{
				echo "<script>alert('Unable to save Parental Details!!!')</script>";
			}
		}else if($selected_choice == "Guardian"){
			$insert_query_guardian = "INSERT INTO `guardian` (guardian_firstname,guardian_lastname,guardian_email,guardian_contact,idno) 
			VALUES 
			('$guardian_firstname','$guardian_lastname','$guardian_email','$guardian_contact','$theCurrentID')";
			$insert_guardian = mysqli_query($conn, $insert_query_guardian);
			if($insert_guardian){
				//remove all session variables
				session_unset();
				//destroy the session
				session_destroy();
				header("Location: index.php");
				echo "<script>alert('Guardian Details Successfully approved!')</script>";
			}else{
				header("Location: parents.php");
				echo "<script>alert('Unable to save Guardian Details!!!')</script>";
			}
		}
	}
?>