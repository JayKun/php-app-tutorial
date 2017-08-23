<?php
    $username="";
    $password="";
    $errorMessage="";

// Check Whether the regsiter button has been pressed.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $database = "login";

    $connection = new mysqli("localhost", "admin", "admin", $database);
    if ($connection->connect_error) {
	die("Connection failed: " . $conn->connect_error);
    } 
    // Check whether the database exists.
    if($connection){
    	// TODO: Check the dataase for duplicates.
	// Construct a SQL query that SELECTS everything from  the users table that has it's username field = $username
    	$sql_query = "SELECT * FROM users WHERE username = '$username'";

    	// Retrieve the resource.
    	$result = $connection->query($sql_query);
        // Check whether the username already exists.
    	if($result->num_rows > 0){
            $errorMessage = "username is already taken.";
    	}
    	else{
		// TODO: Use the build in password_hash function to hash the password
    		$passHash = "";
		// TODO: Construct a SQL query that inserts the new username and the new $passHash into the users table.
    		$sql_query = "";
		// TODO: query the database using the previosuly constructed sql query
    		$connection->query();
		// TODO: Redirect the user to the login page.
    	}
    }

    // If not return an error.
    else{
        $errorMessage = "database not found.";
        header("Location: index.php");
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Sign up</h2>
    </div>
    <section class="container jumbotron">
	<form name="register-form" action="signup.php" method="post">
		<div class="form-group">
			Username: <input type="text" name="username" class="form-control">
			Password: <input type="text" name="password" class="form-control">
			<br>
            <!-- TODO: create a button "Sign up", type="submit"-->
		</div>
	</form>
    <!-- incomplete, link it to index.php -->
    <button class="btn btn-success">Go Back</button>
    <?php echo "\n".$errorMessage; ?>
    </section>
</body>
</html>
