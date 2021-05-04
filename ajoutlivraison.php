<?php
include "../model/livraison.php";
include "../controller/livraisonc.php";
if(isset($_POST['nom']) and isset($_POST['adresse']) and isset($_POST['date']) and isset($_POST['etat']) and isset($_POST['total']) and isset($_POST['livreur'])) 
{
$livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['total'],$_POST['date'],$_POST['etat'],$_POST['livreur']);
$livraison1c= new livraisonc();
$livraison1c->ajouterlivraison($livraison1);
header('Location: checkout.php');
}


	

?>
