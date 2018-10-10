<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('location:log.php');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body   style="text-align: center;">

 	<h2 class="text-center">Welcome to <?php echo $_SESSION['username']; ?></h2>
 	<a href="logout.php" style="float: right; padding-right: 20px;">Logout</a>
 
 </body>
 </html>