<?php 

require 'connexion/connect.php';

/*print_r($_POST);*/

$denomination = $_POST['denomination'];
$formJuridique = $_POST['formJuridique'];
$activite = $_POST['activite'];
$siege = $_POST['siege'];
$beneficiaire = $_POST['beneficiaire'];
$duree = $_POST['duree'];
$capitalChiffre = $_POST['capital_chiffre'];
$capitalLettre = $_POST['capital_lettre'];
$id__soc = $_POST['id__soc'];
	
	

	/*----------------------------------------------------Insertion RC-------------------------------------------------*/

	$sql = "insert into registrescommerces (denomination, formJuridique, activite, siege, beneficiaire, duree, capitalChiffre, capitalLettre, id__soc) 
			values (:denomination, :formJuridique, :activite, :siege, :beneficiaire, :duree, :capitalChiffre, :capitalLettre, :id__soc)";
	$result = $db->prepare($sql);
	$result->execute(array(

			':denomination' => $denomination,
			':formJuridique' => $formJuridique,
			':activite' => $activite,
			':siege' => $siege,
			':beneficiaire' => $beneficiaire,
			':duree' => $duree,
			':capitalChiffre' => $capitalChiffre,
			':capitalLettre' => $capitalLettre,
			':id__soc' => $id__soc
		));

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
    $body .= "L'activite de votre entrprise est : " . $activite . $eol;
    $body .= "Le siege de votre entreprise est : " . $siege . $eol;
    $body .= "La dureé de votre entrprise est : " . $duree . $eol;
    $body .= "Le capital de votre entroprise en chiffre est : " . $capital_chiffre . $eol;
    $body .= "Le capital de votre entroprise en lettre est : " . $capital_lettre . $eol;
    
    //SEND Mail
    mail($mailto, $subject, $body, $headers);


	header('Location: liste_rc.php');

 ?>