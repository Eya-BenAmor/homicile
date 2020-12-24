<?PHP
	class medecin{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $mdp = null;
		
		private  $specialite = null;
		private  $tel = null;
		
		
		function __construct(string $nom, string $prenom, string $email, string $mdp, string $specialite, string $tel){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->mdp=$mdp;
			
			$this->specialite=$specialite;
			$this->tel=$tel;
			
			
			
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
		
		function getspecialite(): string{
			return $this->specialite;
		}
		function getmdp(): string{
			return $this->mdp;
		}
		function gettel(): string{
			return $this->tel;
		}
	

		function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		
        function setspecialite(string $specialite): void{
			$this->specialite=$specialite;
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
      
		
	}
	?>
