<!DOCTYPE html>
<html>
<head>
	<title>Record</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    

<section class="container">
   <h1><span class="glyphicon glyphicon-user"> </span> Student Records</h1>                                                                         
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                        //all these 4 variables are based on MySQL database
                        //insert appropriately based on your database information
                        $servername = "";
                        $username = "";
                        $password = "";
                        $dbname = "";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error)
                        {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM students";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0)
                        {
                            // output data of each row
                            while($row = $result->fetch_assoc())
                            {
                                echo "<tr class='info'><td>" . $row["id"]. "</td>";
                                echo "<td>" .$row["firstname"]. " </td>";
                                echo "<td>" .$row["lastname"]."</td>";
                                echo "<td>".$row["email"]."</td> </tr>";
                            }
                        }
                        
                        else
                        {
                            echo "0 results";
                        }
				
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
            <a href="home.php"><button class="btn btn-success">Go Back</button></a>
</section>
    
</body>
</html>
