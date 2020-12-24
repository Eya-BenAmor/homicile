<?PHP
  include "../config.php";
  class connectC
{

	function connect($email)
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

   function connectM($email)
	{
        $sql = "SELECT * FROM medecin WHERE email='$email'";
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