<?php
		$servername = "localhost";
		$username = "id2460984_admin";
		$password = "ilovetophortay";
		$dbname = "id2460984_students";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO students(firstname, lastname, email)
		VALUES ('".$_POST['firstname']. "', '" .$_POST['lastname']. "','" .$_POST['email']."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
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
