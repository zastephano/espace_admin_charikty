<?php 

require 'connexion/connect.php';

/*print_r($_POST);*/

$beneficiaire = $_POST['beneficiaire'];
$denomination = $_POST['denomination'];
$siege = $_POST['siege'];
$activite = $_POST['activite'];
$if = $_POST['if'];
$formJuridique = $_POST['formJuridique'];
$id__soc = $_POST['id__soc'];
	
	
	/*----------------------------------------INSERTION--------------------------------------------------------*/
	$sql = "insert into identifiantsfiscales (denomination, siege, activite, formJuridique, beneficiaire, num_if, id__soc) 
			values (:denomination, :siege, :activite, :formJuridique, :beneficiaire, :num_if , :id__soc)";
	$result = $db->prepare($sql);
	$result->execute(array(

			':denomination' => $denomination,
			':siege' => $siege,
			':activite' => $activite,
			':formJuridique' => $formJuridique,
			':beneficiaire' => $beneficiaire,
			':num_if' => $if,
			':id__soc' => $id__soc
		));
	

	/*----------------------------------------SEND EMAIL--------------------------------------------------------*/
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
    $body .= "Le numero d'identifiant Fiscale de votre entrprise est : " . $if . $eol;
    
    //SEND Mail
    mail($mailto, $subject, $body, $headers);

	header('Location: liste_if.php');

 ?>