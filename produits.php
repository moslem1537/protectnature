<?PHP
	class produits{
		private ?int $id = null;
		private ?string $produit = null;
	
		private ?int $quantites = null;
		
		
		
		function __construct(string $produit, int $quantites){
			
			$this->produit=$produit;
		
			$this->quantites=$quantites;
			
		}
		
		function getid(): int{
			return $this->id;
		}
		function getproduit(): string{
			return $this->produit;
		}
		
		
		function getquantites(): int{
			return $this->quantites;
		}
		
		
		function setproduit(string $produit): void{
			$this->produit=$produit;
		}
	
		function setquantites(int $quantites): void{
			$this->quantites=$quantites;
		}
		
		
	}
?>