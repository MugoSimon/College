<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/parent.css">
		<title>Parental Details</title>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="cont-wrapper" align="center" style="background-color: #eee; padding: 20px 0">
				<form action="insertParent.php" method="post">
					<div class="form-group">
						<h1>PRIVILEGE INFORMATION</h1>
						<hr/>
						<div class="form-group col-md-6" id="divalign">
							<label class="col-form-label"><h5>Choose an Option</h5></label>
							<select name="selected" class="custom-select" id="selected" onchange="disableOption()">
								<option selected>Choose an Option</option>
								<option>Parents</option>
								<option>Guardian</option>
							</select>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<div id="parents" style="visibility: hidden; display: none;">
								<label><h5>Parents</h5></label>
								<br/>
								<label><h5>Mother's firstname</h5></label>
								<input type="text" class="form-control" placeholder="e.g Grace" name="mother_firstname"/>
								<label><h5>Mother's lastname</h5></label>
								<input type="text" class="form-control" placeholder="e.g Wangiru" name="mother_lastname"/>
								<label><h5>Mother's Email</h5></label>
								<input type="email" class="form-control" placeholder="e.g grace@gmail.com" name="mother_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
								<label><h5>Mother's phone number</h5></label>
								<input type="number" class="form-control" placeholder="e.g +254720202020" name="mother_contact"/>
								<label><h5>Father's firstname</h5></label>
								<input type="text" class="form-control" placeholder="e.g John" name="father_firstname"/>
								<label><h5>Father's lastname</h5></label>
								<input type="text" class="form-control" placeholder="e.g Kimani" name="father_lastname"/>
								<label><h5>Father's email</h5></label>
								<input type="email" class="form-control" placeholder="e.g kimani@gmail.com" name="father_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="john@gmail.com" />
								<label><h5>Father's phone number</h5></label>
								<input type="number" class="form-control" placeholder="e.g +254720202020" name="father_contact"/><br><br>
							</div>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<div id="guardian" style="visibility: hidden; display: none;">
								<em><i><u>If no parents:</u></i></em><br>
								<label><h5>Guardian's firstname</h5></label>
								<input type="text" class="form-control" placeholder="e.g Peter" name="guardian_firstname"/>
								<label><h5>Guardian's lastname</h5></label>
								<input type="text" class="form-control" placeholder="e.g Mbugua" name="guardian_lastname"/>
								<label><h5>Guardian's email</h5></label>
								<input type="email" class="form-control" placeholder="e.g peter@gmail.com" name="guardian_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="wexx@gmail.com" /><br><br>
								<label><h5>Guardian's phone number</h5></label>
								<input type="number" class="form-control" placeholder="e.g +254720202020" name="guardian_contact"/><br><br>
							</div>
						</div>
						<div>
							<div class="form-group col-md-6" id="divalign">
								<button type="submit" class="btn btn-success btn-block" name="insertParent">Finish</button>
							</div>
						</div>
					</div>
				</form>
				<script type="text/javascript" src="bootstrap/jquery/jquery.js"></script>
				<script type="text/javascript" src="bootstrap/jquery/jquery.min.js"></script>
				<script src="bootstrap/js/bootstrap.js"></script>
				<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
			</div>
		</div>
	</body>
</html>
