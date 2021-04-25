<?PHP
	include "../controller/produitc.php";

	$produitc=new produitc();
	
	if (isset($_POST["id"])){
		$produitc->supprimerproduit($_POST["id"]);
		header('Location:afficherproduit.php');
	}

?>