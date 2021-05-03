<?PHP
	include "../config.php";
	require_once '../Model/nouvelles.php';

	class nouvellec {
		
		function ajouternouvelle($nouvelles){
			$sql="INSERT INTO nouvelles (titre, date, contenu,photo) 
			VALUES (:titre,:date, :contenu,:photo)";
			$db = config::getConnexion();
			$photo = $nouvelles->photo();
			 $upload ="pictur/".$photo;
			 move_uploaded_file($_FILES['img']['tmp_name'],$upload);
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'titre' => $nouvelles->gettitre(),
					'date' => $nouvelles->getdate(),
					'contenu' => $nouvelles->getcontenu(),
					'photo' => $nouvelles->photo(),
				
					
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
			
			$sql="UPDATE nouvelles SET titre=:titre, date=:date, contenu=:contenu , photo=:photo WHERE id=:id";
$db = config::getConnexion();
$photo = $nouvelles->photo();
			 $upload ="pictur/".$photo;
			 move_uploaded_file($_FILES['img']['tmp_name'],$upload);
try {
$query = $db->prepare($sql);
$query->execute([
'titre' => $nouvelles->gettitre(),
'date' => $nouvelles->getdate(),
'contenu' => $nouvelles->getcontenu(),
'photo' => $nouvelles->photo(),

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
			
		
			$sql = "SELECT * FROM nouvelles order by date  ";
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