<?php
session_start();
if ((isset($_SESSION['login']) && $_SESSION['login'] == 1)) {
	header ("Location: home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
	<title>PhorTay</title>
</head>
<body>

<section class="container">
<h2>PhorTay Student Database</h2>

</section>


<section class="container jumbotron">
    <div class="row">
	    <div class="col-md-4">
		TODO: Form tag, action attribute = login.php	
                     <a href="signup.php"><button>Register</button></a>
		</div>
    </div>

    <a href="records.php"><h2>View records</h2></a>
</section>



</body>
</html>
