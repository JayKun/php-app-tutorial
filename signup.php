<?php
    $username="";
    $password="";
    $errorMessage="";

// Check Whether the regsiter button has been pressed.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $database = "login";
    
    // We establish the connection to the server
    $connection = new mysqli("localhost", "admin", "admin", $database);
                    if ($connection->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
    // Check whether the database exists.
    if($connection){
    	// Construct the query
    	$sql_query = "SELECT * FROM users WHERE username = '$username'";

    	// Retrieve the resource.
    	$result = $connection->query($sql_query);
        // Check whether the username already exists.
    	if($result->num_rows > 0){
            $errorMessage = "username is already taken.";
    	}
        // Create a new password hash
        // Store the hash in the password field of the database
        // Redirects the user to index.php
    	else{
    		$passHash = password_hash($password, PASSWORD_DEFAULT);
    		$sql_query = "INSERT INTO users(username, password) VALUES ('$username', '$passHash')";
    		$connection->query($sql_query);
    		header("Location: index.php");

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
            <button class="btn btn-info" type="submit">Sign Up</button>
		</div>
	</form>
    <a href="index.php"><button class="btn btn-success">Go Back</button></a>
    <?php echo "\n".$errorMessage; ?>
    </section>
</body>
</html>
