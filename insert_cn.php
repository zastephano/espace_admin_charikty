<?php 

require 'connexion/connect.php';

/*print_r($_POST);*/

$denomination = $_POST['denomination'];
$formJuridique = $_POST['formJuridique'];
$ice = $_POST['ice'];
$beneficiaire = $_POST['beneficiaire'];
$activite = $_POST['activite'];
$ville = $_POST['ville'];
$id__soc = $_POST['id__soc'];
	
		
	/*-----------------------------------------------------INSERTION CN---------------------------------------------------*/
	$sql = "insert into certificatsnegatifs (denomination, formJuridique, numICE, beneficiaire, activite, ville,id__soc) 
			values (:denomination, :formJuridique, :numICE, :beneficiaire, :activite, :ville,:id__soc)";
	$result = $db->prepare($sql);
	$result->execute(array(

			':denomination' => $denomination,
			':formJuridique' => $formJuridique,
			':numICE' => $ice,
			':beneficiaire' => $beneficiaire,
			':activite' => $activite,
			':ville' => $ville,
			':id__soc' => $id__soc
		));

	/*----------------------------------------------------MODIFICATION ETAT-------------------------------------------------*/
	$sql = "update societes set etat = 1 where id_soc = '" . $id__soc . "'";
	$result = $db->prepare($sql);
	$result->execute();



	/*----------------------------------------------------SEND EMAIL-------------------------------------------------*/

    $mailto = 'zadodido@gmail.com';

    $subject = "Nouvelle Demande de creation d'entreprise";

    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: Charikty <groupePFE@licda.com>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "Nouvelle Demande." . $eol;

    // message
    $body = "--" . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol .$eol;

    // body
    $body .= "Bienvenu " . $beneficiaire . $eol;
    $body .= "Votre Domination Accepté est : " . $denomination . $eol;
    $body .= "La forme juridique est : " . $formJuridique . $eol;
    $body .= "Le numero ICE est : " . $ice . $eol;
    $body .= "L'activité de votre societé est : " . $activite . $eol;
    
    //SEND Mail
    mail($mailto, $subject, $body, $headers);




	
	header('Location: Liste_Certificats_Negatif.php');

 ?>