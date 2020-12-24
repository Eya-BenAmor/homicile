<?PHP
  require_once "../config.php";
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
   
    }
    ?>