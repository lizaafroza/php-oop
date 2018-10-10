<?php 

session_start();

header('location:log.php');

// database connection....
$con = mysqli_connect('localhost','root');
if ($con) {
	echo"connection successfully";
}else{

	echo "no connection";
}


// database selection...

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

// database insertion...

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home.php');
}else
{
	header('location:log.php');
}

 ?>
