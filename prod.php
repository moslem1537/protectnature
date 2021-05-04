<?PHP
	class prod{
		private ?int $id = null;
		private ?string $nom= null;
		
		
		function getnom(): string{
			return $this->nom;
		}
		function __construct(string $nom){
			
			$this->nom=$nom;
		
			
			
		}
		
		
        function getid(): int{
			return $this->id;
		}
		
		
		
		
		
		
		function setnom(string $nom): void{
			$this->nom=$nom;
		}
	
		
		
		
	}
?>