<?PHP
class livreur{

	private $idl;
	private $nom;
	private $prenom;
	private $date;

    
	function __construct($id,$nom,$prenom,$date){
		$this->idl=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
	$this->date=$date;
	}       
	
	function getid(){
		return $this->idl;
	}
function getdate(){
		return $this->date;
	}

	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}

	function setdate($date){
		$this->date=$date;
	}

	
}

?>