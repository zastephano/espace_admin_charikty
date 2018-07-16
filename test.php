<?php 
session_start();
require 'connexion/connect.php';

	/*$id = $_POST['id'];

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
		
	$sql = "update clients set name = '".$nom."', surname = '".$prenom."', phone = '".$phone."', email = '".$email."', password = '".$password."'where id ='".$id."'";
	$result = $db->prepare($sql);
	$result->execute();*/

	$user = $_SESSION['email'];

	/*--------------------------------CN----------------------------------*/
	$result = $db->prepare("SELECT etat_cn FROM societes
                      		join clients on id__cl = id_cl 
                            join certificatsnegatifs on id_soc = id__soc
                            where email =" . $user);
	$result->execute();
	$fetch = $result->fetch();
	$etat_cn = $fetch['etat_cn'];
	/*--------------------------------STATUS----------------------------------*/
	$result = $db->prepare("SELECT etat_status FROM societes
                      		join clients on id__cl = id_cl 
                            join statuts on id_soc = id__soc
                            where email =" . $user);
	$result->execute();
	$fetch = $result->fetch();
	$etat_status = $fetch['etat_status'];

	/*--------------------------------Patente----------------------------------*/
	$result = $db->prepare("SELECT etat_patente FROM societes
                      		join clients on id__cl = id_cl 
                            join patentes on id_soc = id__soc
                            where email =" . $user);
	$result->execute();
	$fetch = $result->fetch();
	$etat_patente = $fetch['etat_patente'];

	/*--------------------------------RC----------------------------------*/
	$result = $db->prepare("SELECT etat_rc FROM societes
                      		join clients on id__cl = id_cl 
                            join registrescommerces on id_soc = id__soc
                            where email =" . $user);
	$result->execute();
	$fetch = $result->fetch();
	$etat_rc = $fetch['etat_rc'];

	/*--------------------------------IF----------------------------------*/
	$result = $db->prepare("SELECT etat_if FROM societes
                      		join clients on id__cl = id_cl 
                            join identifiantsfiscales on id_soc = id__soc
                            where email =" . $user);
	$result->execute();
	$fetch = $result->fetch();
	$etat_if = $fetch['etat_if'];


?>