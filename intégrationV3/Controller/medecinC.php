<?PHP
 require_once('C:\wamp64\www\PHP\ici\eya\config.php');
 require_once('C:\wamp64\www\PHP\ici\eya\Model\medecin.php');
 
  class medecinC
{

	function afficherM($id)
	{
        $sql = "SELECT * FROM  `medecin` WHERE id='$id'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
        function afficherM2()
	{
    $sql = "SELECT * FROM `medecin`";  
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
        }
        function ajouterM($medecin)
        {
            
        $sql = "INSERT INTO  `medecin` (nom, prenom, email, mdpM, specialite, tel ) VALUES (:nom ,:prenom, :email, :mdp, :specialite, :Tel)";
           $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    
                    'nom' => $medecin->getnom(),
                    'prenom' => $medecin->getprenom(),
                    'email' => $medecin->getemail(),
            'mdp' => $medecin->getmdp(),
            'specialite' => $medecin->getspecialite(),
            
    'Tel' => $medecin->gettel()
                    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
    } 
    function supprimerM($id)
	{
		$sql = "DELETE FROM `medecin` WHERE id= '$id'";
		$db = config::getConnexion();
       
      
        try{
            $req=$db->query($sql);
      
    }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }    
       
    }
    ?>