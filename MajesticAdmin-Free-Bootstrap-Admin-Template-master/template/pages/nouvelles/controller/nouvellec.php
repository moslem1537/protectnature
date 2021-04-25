<?PHP
	include "../config.php";
	require_once '../Model/nouvelles.php';

	class nouvellec {
		
		function ajouternouvelle($nouvelles){
			$sql="INSERT INTO nouvelles (titre, contenu) 
			VALUES (:titre,:contenu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'titre' => $nouvelles->gettitre(),
					'contenu' => $nouvelles->getcontenu(),
				
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichernouvelle(){
			
		
			$sql = "SELECT * FROM nouvelles ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimernouvelle($id){
			$sql="DELETE FROM nouvelles WHERE id= :id";
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
		function modifiernouvelle($nouvelles, $id){
			
			$sql="UPDATE nouvelles SET titre=:titre, contenu=:contenu WHERE id=:id";
$db = config::getConnexion();
try {
$query = $db->prepare($sql);
$query->execute([
'titre' => $nouvelles->gettitre(),
'contenu' => $nouvelles->getcontenu(),
'id' => $id
]);
}

catch (Exception $e) {
echo 'erreur : '.$e->getMessage();
}



}
		
		function recuperernouvelle($id){
			$sql="SELECT * from nouvelles where id=$id";
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
			
		
			$sql = "SELECT * FROM nouvelles order by titre ASC ";
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