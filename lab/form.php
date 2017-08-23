<?php
        // TODO: Fill up the necessary database credentials based on your MySQL database information
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";

	// Initialize connection with the students database
	// mysqli is an inbuilt library class
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check for connection errors
	if ($conn->connect_error){
	    die("Connection failed: " . $conn->connect_error);
	} 

        // TODO: Construct a SQL query that inserts an entry to the students table.
	$sql = "INSERT INTO students()
	VALUES ('".$_POST['firstname']. "', '" .$_POST['lastname']. "','" .$_POST['email']."')";

	if ($conn->query($sql) === TRUE){
	    echo "New record created successfully";
	}

	else{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="home.php"><button>Back</button></a>
</body>
</html>
