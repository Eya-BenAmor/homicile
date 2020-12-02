<?PHP
include "../config.php";
require_once '../Model/rdv.php';

class rdvC
{

	function ajouterrdv($rdv)
	{
		$sql = "INSERT INTO rdv (date, specialite, type) 
			VALUES (:date ,:specialite, :type)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				
				'date' => $rdv->getdate(),
				'specialite' => $rdv->getspecialite(),
				'type' => $rdv->gettype()
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function afficherrdv()
	{

		$sql = "SELECT * FROM rdv";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
   
    function supprimerrdv($id)
	{
		$sql = "DELETE FROM rdv WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierrdv($id,$date,$specialite,$type)
    {
        
        $sql="UPDATE rdv SET id= '$id', date= '$date' , specialite= '$specialite',type= '$type' WHERE id='$id'";
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
	function getById($id)
	{
		
		$sql = "SELECT * from rdv where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

		

		
	

}