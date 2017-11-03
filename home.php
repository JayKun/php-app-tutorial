<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] !='')) {
	header ("Location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <section class="container">
    <h1> <span class="glyphicon glyphicon-pencil"></span> Insert entry to database</h1>
    <div class="jumbotron">
		<form name="form" action="form.php" method="post">
		<div class="form-group">
			  First name: <input type="text" class="form-control" name="firstname" id="firstname" value="Joe" required>
			  <br>
			  Last name: <input type="text" class="form-control" name="lastname" id="lastname" value="Bruin" required>
			  <br>
			  Email: <input type="email" class="form-control" name="email" id="interests" required>
			  <br>
			  <button type="submit" class="btn btn-info" value="Submit">Submit</button>
		</div>
		</form>
	</div>
    <a href="records.php"><h2>View records</h2></a>
    <br>
    <a href="logout.php"><button class="btn btn-warning">Logout</button></a>
</section>


</body>
</html>
