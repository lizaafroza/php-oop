<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="col-md-6">
		<div class="header">
		<h2>Register</h2>
	</div>
		
        <form method="post" action="registration.php">
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="user" placeholder="Enter Username">
		</div>
		
		<div class="input-group">
			<label>Passord</label>
			<input type="password" name="password" placeholder="Enter Passord">
		</div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>Already a member? <a href="registration.php">Login</a></p>

	</form>

	</div>
    
</body>
</html>