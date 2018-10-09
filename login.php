<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('liza', 'liza', 'liza@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="POST" action="#">
		
		<div class="form_input">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="form_input">
			<label>Passord</label>
			<input type="password" name="password">
		</div>
		
		<div class="form_input">
			<button type="submit" name="submit" class="btn">Submit</button>
		</div>
		
	</form>
    
</body>
</html>