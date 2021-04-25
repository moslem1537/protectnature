<?PHP
	class nouvelles{
		private ?int $id = null;
		private ?string $titre = null;
		//private ?date(format) $date = null;
		private ?string $contenu = null;
		
		
		function __construct(string $titre,  string $contenu){
			
			$this->titre=$titre;
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
		
		function settitre(string $titre): void{
			$this->titre=$titre;
		}
	
		function setcontenu(string $contenu): void{
			$this->contenu=$contenu;
		}
		
	}
?>