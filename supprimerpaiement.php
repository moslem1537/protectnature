<?PHP
	include "../controller/paiementc.php";

	$paiementc=new paiementc();
	
	if (isset($_POST["id"])){
		$paiementc->supprimerpaiement($_POST["id"]);
		header('Location:afficherpaiement.php');
	}

?>