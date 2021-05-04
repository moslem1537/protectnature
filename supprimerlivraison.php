<?PHP
include "../controller/livraisonc.php";
$livraison1c=new livraisonc();
if (isset($_POST["id"])){
	$livraison1c->supprimerlivraison($_POST["id"]);
	header('Location: checkout.php');
}

?>