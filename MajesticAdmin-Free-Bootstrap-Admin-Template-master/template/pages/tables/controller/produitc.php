<?PHP
	include "../config.php";
	require_once '../Model/produits.php';

	class produitc {
		
		function ajouterproduit($produits){
			$sql="INSERT INTO produits (nom, prix, quantite, description) 
			VALUES (:nom,:prix,:quantite, :description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $produits->getnom(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'description' => $produits->getdescription(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherproduit(){
			
		
			$sql = "SELECT * FROM produits ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerproduit($id){
			$sql="DELETE FROM produits WHERE id= :id";
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
		function modifierproduit($produits, $id){
			
			$sql="UPDATE produits SET nom=:nom, prix=:prix, quantite=:quantite, description=:description WHERE id=:id";
$db = config::getConnexion();
try {
$query = $db->prepare($sql);
$query->execute([
'nom' => $produits->getnom(),
'prix' => $produits->getprix(),
'quantite' => $produits->getquantite(),
'description' => $produits->getdescription(),
'id' => $id
]);
}

catch (Exception $e) {
echo 'erreur : '.$e->getMessage();
}



}
		
		function recupererproduit($id){
			$sql="SELECT * from produits where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$prod=$query->fetch();
				return $prod;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
function affichertri(){
			
		
			$sql = "SELECT * FROM produits order by nom ASC ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		
		
	}

?>