<?PHP
	include "../config.php";
	require_once '../Model/paiement.php';

	class paiementc {
		
		function ajouterpaiement($paiement){
			$sql=" INSERT INTO paiements (nomprenom, email, adresse, ville, etat, codepostal, cartenom, cartenum, expmois, expannee, cvv) 
			VALUES ( :nomprenom, :email, :adresse, :ville, :etat, :codepostal, :cartenom, :cartenum, :expmois, :expannee, :cvv)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nomprenom' => $paiement->getnomprenom(),
					'email' => $paiement->getemail(),
					'adresse' => $paiement->getadresse(),
					'ville' => $paiement->getville(),
                    'etat' => $paiement->getetat(),
                    'codepostal' => $paiement->getcodepostal(),
                    'cartenom' => $paiement->getcartenom(),
                    'cartenum' => $paiement->getcartenum(),
                    'expmois' => $paiement->getexpmois(),
					'expannee' => $paiement->getexpannee(),
				    'cvv' => $paiement->getcvv(),
                    ]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherpaiement(){
			
			$sql="SELECT * FROM paiements";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherpaiementtri1(){
			
			$sql="SELECT * FROM paiements order by nomprenom desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherpaiementtri(){
			
			$sql="SELECT * FROM paiements order by ville desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerpaiement($id){
			$sql="DELETE FROM paiements WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierpaiement($paiement, $id){
			
			$sql="UPDATE paiements SET nomprenom=:nomprenom, email=:email,
			 adresse=:adresse, ville=:ville, etat=:etat, codepostal=:codepostal, 
			 cartenom=:cartenom, cartenum=:cartenum, expmois=:expmois,
			  expannee=:expannee, cvv=:cvv  WHERE id=:id";
$db = config::getConnexion();
try {
$query = $db->prepare($sql);
$query->execute([
'nomprenom' => $paiement->getnomprenom(),
'email' => $paiement->getemail(),
'adresse' => $paiement->getadresse(),
'ville' => $paiement->getville(),
'etat' => $paiement->getetat(),
'codepostal' => $paiement->getcodepostal(),
'cartenom' => $paiement->getcartenom(),
'cartenum' => $paiement->getcartenum(),
'expmois' => $paiement->getexpmois(),
'expannee' => $paiement->getexpannee(),
'cvv' => $paiement->getcvv(),
'id' => $id
]);
}

catch (Exception $e) {
echo 'erreur : '.$e->getMessage();
}



}
		
		function recupererpaiement($id){
			$sql="SELECT * from paiements where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$pay=$query->fetch();
				return $pay;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
		
	}

?>