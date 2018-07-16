<!DOCTYPE html>
<?php session_start(); 
require 'connexion/connect.php';?>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<form action="auth.php" method="POST">
		<input class="btn btn-danger" type="submit" name="logout" value="logout">
	</form>

	<?php 


	
	

	if (isset($_POST['logout'])) {
		
		session_destroy();
		header("location: auth.php");
	}



	echo "Hello " . $_SESSION['user'] . "<br> Your Pass is : " .  $_SESSION['pass'];

	?>
</body>
</html>