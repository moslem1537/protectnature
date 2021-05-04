 <?PHP
include "../config.php";

class livreurc {

	
	function ajouterlivreur($livreur){
		$sql="insert into livreur(idl,nom,prenom,date) values 
(:idl,:nom,:prenom,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$livreur->getid();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $date=$livreur->getdate();
      
        //lier variable => paramètre
        $req->bindValue(':idl',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
	    
		$req->bindValue(':date',$date);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherlivreur(){
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$result2=$db->query($sql);
		return $result2;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($idl){
		$sql="DELETE FROM livreur where idl= :idl";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idl',$idl);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$idl){
		$sql="UPDATE livreur SET id=:idd, nom=:nom,prenom=:prenom,date=:datee WHERE idl=:idl";
		$db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    $idd=$livreur->getid();
    $nom=$livreur->getNom();
    $prenom=$livreur->getPrenom();
    $date=$livreur->getdate();
    
		$datas = array(':idd'=>$idd, ':idl'=>$idl, ':nom'=>$nom,':prenom'=>$prenom,':datee'=>$date);
		//lier variable => paramètre
		$req->bindValue(':idd',$idd);
		$req->bindValue(':idl',$idl);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);

		$req->bindValue(':datee',$date);
	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		function recupererlivreur($idl){
		$sql="SELECT * from livreur where idl=$idl";
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