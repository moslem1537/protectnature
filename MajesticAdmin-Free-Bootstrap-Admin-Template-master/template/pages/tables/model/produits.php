<?PHP
	class produits{
		private ?int $id = null;
		private ?string $nom = null;
		private ?int $prix = null;
		private ?int $quantite = null;
		private ?string $description = null;
		
		
		function __construct(string $nom, int $prix, int $quantite, string $description){
			
			$this->nom=$nom;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->description=$description;
			
		}
		
		function getid(): int{
			return $this->id;
		}
		function getnom(): string{
			return $this->nom;
		}
		function getprix(): int{
			return $this->prix;
		}
		function getquantite(): int{
			return $this->quantite;
		}
		function getdescription(): string{
			return $this->description;
		}
		
		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprix(int $prix): void{
			$this->prix=$prix;
		}
		function setquantite(int $quantite): void{
			$this->quantite=$quantite;
		}
		function setdescription(string $description): void{
			$this->description=$description;
		}
		
	}
?>