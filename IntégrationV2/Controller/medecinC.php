<?PHP
  require_once "../config.php";
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

       
    }
    ?>