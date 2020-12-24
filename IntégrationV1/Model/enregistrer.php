<?PHP
	class connect{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $mdp = null;
		private  $datenaissance = null;
		private  $genre = null;
		
		
		function __construct(string $nom, string $prenom, string $email, string $mdp, string $datenaissance, string $genre){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->mdp=$mdp;
			$this->datenaissance=$datenaissance;
			$this->genre=$genre;
           
			
			
		}
		function getid(): int{
			return $this->id;
		}
		function getnom(): string{
			return $this->nom;
        }
        function getemail(): string{
			return $this->email;
		}
		function getprenom(): string{
			return $this->prenom;
		}
		function getdate(): string{
			return $this->datenaissance;
		}
		function getgenre(): string{
			return $this->genre;
		}
		function getmdp(): string{
			return $this->mdp;
		}

		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		function setdate(string $date): void{
			$this->datenaissance=$date;
        }
        function setgenre(string $genre): void{
			$this->genre=$genre;
        }
        function setmdp(string $mdp): void{
			$this->mdp=$mdp;
        }
        function setemail(string $email): void{
			$this->email=$email;
        }
        
		
	}
