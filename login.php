<?php
   $username = "";
   $password = "";
   $errorMesasge ="";

   $database = "students";

   if($_SERVER["REQUEST_METHOD"] == "POST" ){
	   $username = $_POST["username"];
	   $password = $_POST["password"];

	   $connection = new mysqli("localhost:80", "admin", "admin", $database);
       			if ($connection->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

	   if($connection){
	       $sql_query = "SELECT * FROM login WHERE username='$username' ";
	       $result =  $connection->query($sql_query); 
	       // if we find the user in the database
		   if($result->num_rows == 1){
                $table = $result->fetch_assoc();
                if(password_verify($password, $table['password'])){
                	session_start(); 
                	$_SESSION['login'] = 1;
                	header("Location: home.php");
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
        echo $errorMesasge;
     ?>
     <a href="index.php"><button>Back</button></a>
</body>
</html>