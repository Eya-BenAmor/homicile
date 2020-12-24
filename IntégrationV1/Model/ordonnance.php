<?PHP
	class ordonnance{
		private  $idr = null;
		private  $medicament1 = null;
		private  $nfj1 = null;
		private  $avap1 = null;
		private  $medicament2 = null;
		private  $nfj2 = null;
		private  $avap2 = null;
		private  $medicament3 = null;
		private  $nfj3 = null;
		private  $avap3 = null;
        private    $remarque = null;
		
		function __construct(int $idr ,string $medicament1, int $nfj1, string $avap1, string $medicament2, int $nfj2, string $avap2,string $medicament3, int $nfj3, string $avap3, string $remarque){
			$this->idr=$idr;
			$this->medicament1=$medicament1;
			$this->nfj1=$nfj1;
			$this->avap1=$avap1;
			$this->medicament2=$medicament2;
			$this->nfj2=$nfj2;
            $this->avap2=$avap2;
            $this->medicament3=$medicament3;
			$this->nfj3=$nfj3;
			$this->avap3=$avap3;
			$this->remarque=$remarque;
           
			
			
		}
		function getidr(): int{
			return $this->idr;
		}
		function getmedicament1(): string{
			return $this->medicament1;
        }
        function getnfj1(): int{
			return $this->nfj1;
		}
		function getavap1(): string{
			return $this->avap1;
		}
		function getmedicament2(): string{
			return $this->medicament2;
        }
        function getnfj2(): int{
			return $this->nfj2;
		}
		function getavap2(): string{
			return $this->avap2;
        }
        function getmedicament3(): string{
			return $this->medicament3;
        }
        function getnfj3(): int{
			return $this->nfj3;
		}
		function getremarque(): string{
			return $this->remarque;
		}
		function getavap3(): string{
			return $this->avap3;
		}
		function setmedicament1(string $medicament1): void{
			$this->medicament1=$medicament1;
		}
		function setnfj1(int $nfj1): void{
			$this->nfj1=$nfj1;
		}
		function setavap1(string $avap1): void{
			$this->avap1=$avap1;
        }
        function setmedicament2(string $medicament2): void{
			$this->medicament2=$medicament2;
		}
		function setnfj2(int $nfj2): void{
			$this->nfj2=$nfj2;
		}
		function setavap2(string $avap2): void{
			$this->avap2=$avap2;
        }
        function setmedicament3(string $medicament3): void{
			$this->medicament3=$medicament3;
		}
		function setnfj3(int $nfj3): void{
			$this->nfj3=$nfj3;
		}
		function setavap3(string $avap3): void{
			$this->avap3=$avap3;
        }
        function setremarque(string $remarque): void{
			$this->remarque=$remarque;
        }
        
		
	}
