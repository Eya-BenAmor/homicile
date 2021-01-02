<?PHP
	class rdv{
		private  $id = null;
		private  $dateti = null;
		private  $idm = null;
		private  $idp = null;
		private  $etat = null;
		
		
		
		function __construct(string $dateti, int $idm, int $idp, string $etat){
			$this->dateti=$dateti;
			$this->idm=$idm;
			$this->idp=$idp;
			$this->etat=$etat;
			
           
			
			
		}
		function getid(): int{
			return $this->id;
		}
		function getdateti(): string{
			return $this->dateti;
        }
        function getidm(): int{
			return $this->idm;
		}
		function getidp(): int{
			return $this->idp;
		}
		function getetat(): string{
			return $this->etat;
		}
		
		function setdateti(string $dateti): void{
			$this->dateti=$dateti;
		}
		function setidm(int $idm): void{
			$this->idm=$idm;
		}
		function setidp(int $idp): void{
			$this->idp=$idp;
        }
        function setetat(string $etat): void{
			$this->etat=$etat;
        }
       
        
		
	}
