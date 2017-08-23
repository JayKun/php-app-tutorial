<?php
   // NOTE: These are not the database credentials but the login credentials of your web app.
   $username = "";
   $password = "";
   $errorMesasge ="";

   $database = "login";
   
   if($_SERVER["REQUEST_METHOD"] == "POST" ){
	   $username = $_POST["username"];
	   // TODO: Get the password from the $_POST variable

	   $connection = new somefunction ("localhost", "admin", "admin", $database);
       			if ($connection->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

	   if($connection){
		// TODO: Construct a SQL qeury to SELECT the entry that has it's username field = $username
	       $sql_query = "";
	 
	       // TODO: Using the query() method from the connection object, query the database using the SQL query you constructed. 
	       $result = ; 
	       // If the user with the username we passed in is found
		if($result->num_rows == 1){
		    // TODO: Convert the result to a associative array using the fetch_assoc() method.
                    $table = $result->fetch_assoc();
		    // TODO: verify that the passwords match using the password_verify function. ($password , $table['password'])
                    if(){
			// Initialize a session
                	session_start(); 
                	$_SESSION['login'] = 1;
			//TODO: Redirect the user to the home page.
                	header();
                    }
                    else{
                	$errorMesasge = "Login Failed :( ";
                	session_start();
                	$_SESSION['login'] = '';
                	header("Location: index.php");
                    }
	        }
	        else{
		    $errorMesasge = "Login Failed :( ";
	        }
           }
	   else{
	       $errorMesasge = "Database not found.";
	   }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php
        //echo means print, in this case, whatever thing assigned to the variable $errorMessage will be printed
        echo $errorMessage;
     ?>
     <a href="index.php"><button>Back</button></a>
</body>
</html>
