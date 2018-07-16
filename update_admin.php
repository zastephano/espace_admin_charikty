<?php 

require 'connexion/connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
		
	$sql = "update admins set 
							name = '".$name."',
							adress = '".$adress."', 
							phone = '".$phone."', 
							email = '".$email."', 
							password = '".$password."'
							where id ='".$id."'";
	$result = $db->prepare($sql);
	$result->execute();


	header('Location: administrateur.php');

 ?>