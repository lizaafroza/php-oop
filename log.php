<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="col-md-6 form2">
		<div class="header">
		<h2>Login Form</h2>
	</div>
		
        <form method="post" action="validation.php">
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="user" placeholder="Enter Name">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Login</button>
		</div>
		<p>Already a member? <a href="">Login</a></p>

	</form>

	</div>

	<div class="col-md-6 form2">
		<div class="header">
		<h2>Register</h2>
	</div>
		
        <form method="post" action="registration.php">
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="user" placeholder="Enter Name">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter Email">
		</div>

		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="number" placeholder="Enter Number">
		</div>
		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>Already a member? <a href="registration.php">Login</a></p>

	</form>

	</div>
    
</body>
</html>