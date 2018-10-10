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
 <body>

 	<h2 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h2>
 	<a href="logout.php">Logout</a>
 
 </body>
 </html>