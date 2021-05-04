<?PHP
	
	require_once '../Model/produits.php';

	class produitc {
		
		function ajouterproduit($produits){
			$sql="INSERT INTO tab (produit, quantites) 
			VALUES (:produit,:quantites)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'produit' => $produits->getproduit(),
					
					'quantites' => $produits->getquantites(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherproduit(){
			
			$sql="SELECT * FROM tab";
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
			$sql="DELETE FROM tab WHERE id= :id";
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
			
			$sql="UPDATE tab SET produit=:produit,  quantites=:quantites WHERE id=:id";
$db = config::getConnexion();
try {
$query = $db->prepare($sql);
$query->execute([
'produit' => $produits->getproduit(),

'quantites' => $produits->getquantites(),

'id' => $id
]);
}

catch (Exception $e) {
echo 'erreur : '.$e->getMessage();
}



}
		
		function recupererproduit($id){
			$sql="SELECT * from tab where id=$id";
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

		
		
	}

?>