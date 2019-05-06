<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/education.css">
		<title>Education Background</title>
	</head>
	<body>
		<div class="container">
			<div class="cont-wrapper" align="center" style="background-color: #eee; padding: 20px 0">
				<form action="insertEducation.php" method="post">
					<div class="form-group">
						<h1>Educational Background</h1>
						<hr/>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Primary School</h5></label>
							<input type="text" class="form-control" placeholder="Enter Your Primary School" name=" primaryschool" max="2100"size="40" required/>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>High School</h5></label>
							<input type="text" class="form-control" placeholder="Enter Your High School" name="highschool" required size="40">
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>High School Index Number</h5></label>
							<input type="number" class="form-control" placeholder="Enter Your High School Index Number" name="indexnumber" required/>
						</div>
						<div class="form-group col-md-6" id="divalign">
							<label><h5>Time of Study</h5></label>
							<br/>
							<label><h5>From:</h5></label>
							<input type="date" class="form-control" name="fromdate"  min="2015"  placeholder="yyyy" required/>
							<label><h5>To:</h5></label>
							<input type="date" class="form-control" name="todate" max="2100" placeholder="yyyy" required/></div>
							<div class="form-group col-md-6" id="divalign">
								<button class="btn btn-success btn-block" type="submit" name="insertEducation">NEXT >></button>
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