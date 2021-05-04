<?PHP
	include_once "../config.php";
	require_once '../Model/prod.php';

	class prodc {
		
		
		function afficherprod(){
			
			$sql="SELECT * FROM produits";
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