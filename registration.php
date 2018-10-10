<?php 

session_start();

header('location:log.php');
$con = mysqli_connect('localhost','root');
if ($con) {
	echo"connection successfully";
}else{

	echo "no connection";
}

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

$q = " select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicat data";
}else
{
	$qy= "insert into signin(name , password , email , number) values ('$name' , '$pass' , '$email' , '$number')";
	mysqli_query($con, $qy);
}

 ?>
