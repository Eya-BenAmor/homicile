<?PHP
   require_once('C:\wamp64\www\PHP\ici\eya\config.php');
   require_once('C:\wamp64\www\PHP\ici\eya\Model\patient.php');
   
  class patientC
{ 

	function afficherP($id)
	{
        $sql = "SELECT * FROM patient WHERE id='$id'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
        function afficherP_email($email)
	{
        $sql = "SELECT * FROM patient WHERE email='$email'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
      function modifierP2($id,$Tel,$GroupS,$date,$email,$genre)
      {
          
          $sql="UPDATE patient SET id= '$id', email= '$email' , Datenaissance= '$date' , genre= '$genre' , Tel= '$Tel' , GroupS= '$GroupS'  WHERE id='$id'";
          $db = config::getConnexion();
         
          try
          {
              $db->query($sql);
          }
          catch (Exception $e)
          {
              die('Erreur: '.$e->getMessage());
          }
              
    }
    function ajouterP($patient)
	{
        
    $sql = "INSERT INTO  `patient` (nom, prenom, email, mdp, genre, Datenaissance, Tel, GroupS ) VALUES (:nom ,:prenom, :email, :mdp, :genre, :Datenaissance, :Tel, :GroupS)";
   	$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				
                'nom' => $patient->getnom(),
                'prenom' => $patient->getprenom(),
				'email' => $patient->getemail(),
        'mdp' => $patient->getmdp(),
        'genre' => $patient->getgenre(),
        'Datenaissance' => $patient->getdate(),
'Tel' => $patient->gettel(),
'GroupS' => $patient->getgroups()
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
}
function afficherP_admin()
	{
        $sql = "SELECT * FROM patient ";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        } 
        function supprimerP($id)
        {
            $sql = "DELETE FROM `patient` WHERE id= '$id'";
            $db = config::getConnexion();
           
          
            try{
                $req=$db->query($sql);
          
        }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }
        function getPatient($id) {
			$sql ="select * from patient where id='".$id."'";
			$db = config::getConnexion();
			try {
				$result = $db->query($sql);
				foreach ($result as $row) {
					return $row;
				}
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
        }
        function getAllPatient() {
			$sql ="select * from patient";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}
	
   
    }
    ?>