<?php 

require 'connexion/connect.php';

	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
		
	$sql = "insert into admins (name, adress, phone, email, password) values (:name, :adress, :phone, :email, :password)";
	$result = $db->prepare($sql);
	$result->execute(array(

			':name' => $name,
			':adress' => $adress,
			':phone' => $phone,
			':email' => $email,
			':password' => md5($password)
		));

	header('Location: administrateur.php');

 ?>