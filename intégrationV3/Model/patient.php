<?PHP
	class patient{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $mdp = null;
		private  $Datenaissance = null;
		private  $genre = null;
		private  $tel = null;
		private  $groups = null;
		
		function __construct(string $nom, string $prenom, string $email, string $mdp, string $Datenaissance, string $genre, string $tel, string $groups){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->mdp=$mdp;
			$this->Datenaissance=$Datenaissance;
			$this->genre=$genre;
			$this->tel=$tel;
			$this->groups=$groups;
			
			
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
			return $this->Datenaissance;
		}
		function getgenre(): string{
			return $this->genre;
		}
		function getmdp(): string{
			return $this->mdp;
		}
		function gettel(): string{
			return $this->tel;
		}
		function getgroups(): string{
			return $this->groups;
		}

		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		function setdate(string $date): void{
			$this->Datenaissance=$date;
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
        function settel(string $tel): void{
			$this->tel=$tel;
        }
        function setgroups(string $groups): void{
			$this->groups=$groups;
        }
		
	}
	?>
