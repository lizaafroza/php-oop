<?php 

session_start();
$con = mysqli_connect('localhost','root');
if ($con) {
	echo"connection successfully";
}else{

	echo "no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_querry($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicat data";
}else
{
	$qy= "insert into signin(name , password) values ('$name' , '$pass')";
	mysqli_querry($con, $qy);
}

 ?>