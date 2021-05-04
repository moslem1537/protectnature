<?PHP
include "../config.php";

class livraisonc {

	
	function ajouterlivraison($livraison){
		$sql="insert into livraison(id,nom,adresse,total,date,etat,livreur) values 
(:id,:nom,:adresse,:total,:date,:etat,:livreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$livraison->getid();
        $nom=$livraison->getNom();
        $prenom=$livraison->getadresse();
        $note=$livraison->gettotale();
        $classe=$livraison->getdate();
        $class=$livraison->getetat();
         $livreur=$livraison->getlivreur();
        //lier variable => paramètre
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$prenom);
		$req->bindValue(':total',$note);
        $req->bindValue(':date',$classe);
        $req->bindValue(':etat',$class);
          $req->bindValue(':livreur',$livreur);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherlivraison(){
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET id=:idd, nom=:nom,adresse=:adresse,etat=:etat,date=:date,total=:total WHERE id=:id";
		$db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    $idd=$livraison->getid();
    $nom=$livraison->getNom();
    $prenom=$livraison->getadresse();
    $note=$livraison->gettotale();
    $classe=$livraison->getdate();
    $class=$livraison->getetat();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':adresse'=>$prenom,':total'=>$note,':date'=>$classe,':etat'=>$class);
		//lier variable => paramètre
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$prenom);
		$req->bindValue(':total',$note);
        $req->bindValue(':etat',$class);
        $req->bindValue(':date',$classe);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($id){
		$sql="SELECT * from livraison where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }*/
	}

    
    
    ?>