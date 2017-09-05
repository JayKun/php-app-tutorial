Lab 1: [SET UP XAMPP AND MySQL]
1.	Open up the XAMPP panel.
2.	Run Apache Host and Run MySQL.
3.	Verify that XAMPP is working by going to your browser and typing in "localhost"
4.	Click on the admin button on the MySQL row.
5.	A new tab should appear showing a phpMyAdmin interface.

Lab 2: [CREATE A NEW USER ACCOUNT]
1.	Go to the user accounts tab.
2.	Scroll down and look for the create new user option.
3.	username: admin, hostname: local, password: admin
4.	Check the grant all privileges checkbox
5.	Save

Lab 3: [CREATE THE LOGIN DATABASE]
1.	Create a new database by clicking on the tiny plus sign on the left most column.
2.	Name the database "login"

[CREATE THE LOGIN TABLE]
1.	Click on the login database located on the left most column.
2.	Create a table with the name ‘users’.
3.	You will be greeted with a table-like structure with four empty rows.
4.	Each row represents a column field in your table.
5.	This table will have 3 fields: id, username, password
6.	id : INT : A_I
7.	username: VARCHAR 50
8.	password: VARCHAR 255
9.	Click on save

Lab 4: [CREATETHE STUDENTS DATABASE]
1.	Create a new database by clicking on the tiny plus sign on the left most column.
2.	Name the database "students"


[CREATE THE STUDENTS TABLE]
1.	Click on the “students” database located on the left most column
2.	Create a table with the name “students”
3.	You will be greeted with a table-like structure with four rows
4.	Each row will represent a column field in your table
5.	This table will have 3 fields: id, firstname, lastname, and email
6.	id : INT : A_I
7.	firstname: VARCHAR 50
8.	lastname: VARCHAR 50
9.	email: VARCHAR 50
10.	Save
Now we have 2 databases with each database containing a table.


Lab 5: [INDEX.PHP] NETBEANS
1.	Create a new project in Netbeans.
2.	Make sure you select PHP in the new project window that pops up.
3.	Include all the files provided in the newly created project.
4.	Verify that everything works by clicking on the green play button on the top.
5.	A new tab should pop up showing you the template.
6.	Fill in the form tag in index.php


Lab 6: [LOGIN.PHP]
1.	Fill up the TODO sections.
2.	Initilaize a connection to the login database using the built in sqli() function.
3.	Check for connection errors by checking the connect error member variable in teh connection object.
4.	Construct a SQL query to SELECT an entry with username equal to the username input.
5.	Use the connection object's query() method to send the previously constructed sql query to the database.
6.	Store the result in a new variable.
7.	Check whether a particular entry with the username exists.
8.	Use the result object's fetch_assoc function to convert the object into an associative array.
9.	Compare the password hashes using the built-in php password_verify function.



Lab 7: [SIGN UP.PHP]
1.	Fill up the TODO sections.
2.	Repeat the necessary steps to set up a connection with the login database.
3.	Hash the password using the built-in password_hash(password, PASSWORD_DEFAULT) method.
4.	Construct a SQL query to INSERT an entry to the database.


Lab 8: [HOME.PHP]
1.	Fill in the required form tags just like index.php
2.	Take note of the "type" attribute in the input tags.
3.	Set the action attribute of the tag to be 'form.php'.


Lab 9: [FORM.PHP]
1.	Fill up the TODO sections
2.	Retrieve all the input from HOME.PHP from the $_POST variable. e.g. $email = POST['email']
3.	Connect to the students database.
4.	Construct a query that INSERTS an entry to username, password, and email fields of the students table.


Lab 10: [RECORDS.PHP]
1.	Fill up the TODO sections
2.	Construct a query that SELECTS all the fields/columns from the table.
3.	Loop through the results and using the echo function, output necessary html tags.


