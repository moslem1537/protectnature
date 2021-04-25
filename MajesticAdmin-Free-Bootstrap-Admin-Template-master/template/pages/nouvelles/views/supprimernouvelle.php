<?PHP
	include "../controller/nouvellec.php";

	$nouvellec=new nouvellec();
	
	if (isset($_POST["id"])){
		$nouvellec->supprimernouvelle($_POST["id"]);
		header('Location:affichernouvelle.php');
	}

?>