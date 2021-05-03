<?PHP
	class nouvelles{
		private ?int $id = null;
		private ?string $titre = null;
		private ?string $date = null;
		private ?string $contenu = null;
		
		  	function photo(){
			$photo = "";
		$photo= $_FILES['img']['name'];
		return $photo;
		}
		function __construct(string $titre, string $date ,  string $contenu ){
			
			$this->titre=$titre;
			$this->date=$date;
			$this->contenu=$contenu;
			
			
		}
		
		function getid(): int{
			return $this->id;
		}
		function gettitre(): string{
			return $this->titre;
		}
	
	
		function getcontenu(): string{
			return $this->contenu;
		}
			function getdate(): string{
			return $this->date;
		}
		
		function settitre(string $titre): void{
			$this->titre=$titre;
		}
	
		function setcontenu(string $contenu): void{
			$this->contenu=$contenu;
		}
		function setdate(string $date): void{
			$this->date=$date;
		}
		
	}
?>