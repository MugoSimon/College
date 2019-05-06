<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Student Application Form</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/studentform.css">
	</head>
	<body>
		<div class="container">
			<div class="cont-wrapper" align="center" style="background-color: #eee; padding: 20px 0">
				<form action="insertStudents.php" method="post">
					<div class="form-group">
						<h1>Student Application Form</h1>
						<hr/>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>First Name</h5></label>
							<input type="text" class="form-control" placeholder="Enter First Name" name="firstname" id="firstname" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Second Name</h5></label>
							<input type="text" class="form-control" placeholder="Enter Second Name"  name="secondname" id="secondname" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Last Name</h5></label>
							<input type="text" class="form-control" placeholder="Enter Last Name"  name="lastname" id="lastname" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Date of Birth</h5></label>
							<input type="date" class="form-control" placeholder="Enter Date of Birth"  name="dob" id="dob" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Identification Number</h5></label>
							<input type="number" class="form-control" placeholder="Enter Identification Number" name="idno" id="idno" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<legend class="col-form-label"><h5>Gender</h5></legend>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="gender" value="male" required><label>Male</label><br>
								<input type="radio" class="form-check-input" name="gender" value="female" required><label>Female</label><br>
							</div>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<legend class="col-form-label"><h5>Marital Status</h5></legend>
							<div class="form-check">
								<input type="radio" class="form-check-input" name="maritalstatus" value="Single" required><label>Single</label><br>
								<input type="radio" class="form-check-input" name="maritalstatus" value="Married" required><label>Married</label><br>
							</div>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Registration Number</h5></label>
							<input type="text" class="form-control" placeholder="Enter Registration Number" name="regno" id="regno" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<legend class="col-form-label"><h5>Program of Study</h5></legend>
							<select name="program" class="custom-select" required>
								<option value="Computer Science">Computer Science</option>
								<option value="Acturial Science">Acturial Science</option>
								<option value="Agricultural Science">Agricultural Science</option>
								<option value="Marine Science">Marine Science</option>
							</select>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<h5>Telephone Number</h5>
							<input type="number" class="form-control" placeholder="Enter Telephone Number" name="telno" id="telno" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<h5>Email Address</h5>
							<input type="email" class="form-control" placeholder="Enter Email Address" name="email" id="email" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<h5>Home Address</h5>
							<input type="text" class="form-control" placeholder="Enter Home Address" name="homeaddress" id="homeaddress" required>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label class="col-form-label"><h5>Religion</h5></label>
							<select name="religion" class="custom-select" required>
								<option value="Christianity">Christianity</option>
								<option value="Muslim">Muslim</option>
								<option value="Pagan">Pagan</option>
								<option value="Buddah">Buddah</option>
								<option value="Hindu">Hindu</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<button class="btn btn-success btn-block" type="submit" name="submit">NEXT >></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript" src="bootstrap/jquery/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/jquery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>