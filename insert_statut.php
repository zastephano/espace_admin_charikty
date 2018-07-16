<?php 

require 'connexion/connect.php';

/*print_r($_POST);*/


$name = $_POST['name'];
$denomination = $_POST['denomination'];
$nationalite = $_POST['nationalite'];
$dateN = $_POST['dateN'];
$cin = $_POST['cin'];
$adress = $_POST['adress'];
$siege = $_POST['siege'];
$Cchiffre = $_POST['capital_chiffre'];
$Clettre = $_POST['capital_lettre'];
$id__soc = $_POST['id__soc'];
	
		
	/*-----------------------------------------------------INSERTION CN---------------------------------------------------*/
	$sql = "insert into statuts (name, denomination, nationalite, dateNaissance, cin, adresse, siege, capitalChiffre, capitalLettre, id__soc) 
			values (:name, :denomination, :nationalite, :dateNaissance, :cin, :adresse, :siege, :capitalChiffre, :capitalLettre, :id__soc)";
	$result = $db->prepare($sql);
	$result->execute(array(

			':name' => $name,
			':denomination' => $denomination,
			':nationalite' => $nationalite,
			':dateNaissance' => $dateN,
			':cin' => $cin,
			':adresse' => $adress,
			':siege' => $siege,
			':capitalChiffre' => $Cchiffre,
			':capitalLettre' => $Clettre,
			':id__soc' => $id__soc
		));

	/*----------------------------------------------------MODIFICATION ETAT-------------------------------------------------*/
	/*$sql = "update societes set etat = 1 where id_soc = '" . $id__soc . "'";
	$result = $db->prepare($sql);
	$result->execute();*/



	/*----------------------------------------------------SEND EMAIL-------------------------------------------------*/

    $mailto = 'zadodido@gmail.com';

    $subject = "Nouvelle Demande de creation d'entreprise";

    $eol = "\r\n";

 
    $headers = "From: Charikty <groupePFE@licda.com>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "Nouvelle Demande." . $eol;

 
    $body = "--" . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol .$eol;

  
    $body .= "Bienvenue " . $beneficiaire . $eol;
    $body .= "Votre nom est  " . $name . $eol;
    $body .= "Votre nationalite est  " . $nationalite . $eol;
    $body .= "Votre dateNaissance est  " . $dateNaissance . $eol;
    $body .= "Votre Domination Accepté est : " . $denomination . $eol;
    $body .= "Votre CIN est : " . $cin . $eol;
    $body .= "Votre Capital en Chiffre est : " . $Cchiffre . $eol;
    $body .= "Votre Capital en Lettre est : " . $Clettre . $eol;
    
    
    mail($mailto, $subject, $body, $headers);




	
	header('Location: liste_statuts.php');

 ?>