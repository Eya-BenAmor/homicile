<?PHP
	class rdv{
		private  $id = null;
		private  $date = null;
		private  $specialite = null;
		private  $type = null;
		
		function __construct(string $date, string $specialite, string $type ){
			$this->date=$date;
			$this->specialite=$specialite;
			$this->type=$type;
			

			
		}
		
		function getid(): int{
			return $this->id;
		}
		function getspecialite(): string{
			return $this->specialite;
		}
		function gettype(): string{
			return $this->type;
		}
		function getdate(): string{
			return $this->date;
		}
		

		function setspecialite(string $specialite): void{
			$this->specialite=$specialite;
		}
		function settype(string $type): void{
			$this->type=$type;
		}
		function setdate(string $date): void{
			$this->date=$date;
		}
		
	}
