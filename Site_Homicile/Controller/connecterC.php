<?PHP
  require_once('C:\wamp64\www\PHP\ici\eya\config.php');
 
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
        function connectadmin($email)
	{
        $sql = "SELECT * FROM admin WHERE email='$email'";
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