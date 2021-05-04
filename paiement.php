<?PHP
	class paiement{
		private ?int $id = null;
		private ?string $nomprenom = null;
        private ?string $email = null;
        private ?string $adresse = null;
        private ?string $ville = null;
        private ?string $etat = null;
        private ?int $codepostal = null;
        private ?string $cartenom = null;
        private ?int $cartenum = null;
        private ?string $expmois = null;
        private ?int $expannee = null;
		private ?int $cvv = null;
		
		
		
		function __construct(string $nomprenom, string $email, string $adresse, string $ville, string $etat, int $codepostal, 
        string $cartenom, int $cartenum , string $expmois ,int $expannee, int $cvv){
			
			$this->nomprenom=$nomprenom;
            $this->email=$email;
            $this->adresse=$adresse;
            $this->ville=$ville;
            $this->etat=$etat;
            $this->codepostal=$codepostal;
            $this->cartenom=$cartenom;
            $this->cartenum=$cartenum;
            $this->expmois=$expmois;
            $this->expannee=$expannee;
            $this->cvv=$cvv;
			
		}
		
		function getid(): int{
			return $this->id;
		}
		function getnomprenom(): string{
			return $this->nomprenom;
		}
        function getemail(): string{
			return $this->email;
			
		}
		function getadresse(): string{
			return $this->adresse;
			
		}
        function getville(): string{
			return $this->ville;
		}
        function getetat(): string{
			return $this->etat;
		}
        function getcodepostal(): int{
			return $this->codepostal;
		}
        function getcartenom(): string{
			return $this->cartenom;
		}
        function getcartenum(): int{
			return $this->cartenum;
		}
        function getexpmois(): string{
			return $this->expmois;
		}
        function getexpannee(): int{
			return $this->expannee;
		}
		function getcvv(): int{
			return $this->cvv;
		}
		
		
		
		
		function setnomprenom(string $nomprenom): void{
			 $this->nomprenom=$nomprenom;
		}
        function setemail(string $email): void{
			 $this->email=$email;
		}
        function setville(string $ville):void{
			 $this->ville=$ville;
		}
        function setetat(string $etat): void{
			$this->etat=$etat;
		}
        function setcodepostal(int $codepostal): void{
			$this->codepostal=$codepostal;
		}
        function setcartenom(string $cartenom): void{
		     $this->cartenom=$cartenom;
		}
        function setcartenum(int $cartenum): void{
			 $this->cartenum=$cartenum;
		}
        function setexpmois(string $expmois): void{
			 $this->expmois=$expmois;
		}
        function setexpannee(int $expannee): void{
			 $this->expannee=$expannee;
		}
		function setcvv(int $cvv): void{
			 $this->cvv=$cvv;
		}
		
		
	}
?>