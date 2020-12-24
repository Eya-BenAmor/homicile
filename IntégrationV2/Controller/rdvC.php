<?php
require_once "../config.php";
require_once '../Model/rdv.php';
class rdvC
{

	function ajouterrdv($rdv)
	{
        
    $sql = "INSERT INTO  `rendez-vous` (dateti, idm, idp, etat) VALUES (:dateti ,:idm, :idp, :etat)";
   	$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				
                'dateti' => $rdv->getdateti(),
                'idm' => $rdv->getidm(),
				'idp' => $rdv->getidp(),
				'etat' => $rdv->getetat()
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
} 
function afficherrdv($id)
	{
        $sql = "SELECT * FROM `rendez-vous` WHERE idm='$id'";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
		}
		function afficherrdvS()
	{
        $sql = "SELECT * FROM `rendez-vous` ";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
        
		}
		function recupererrdv($id)
	{
        $sql = "SELECT * FROM `rendez-vous` WHERE id='$id'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
}
		function afficherrdv2($id)
	{
        $sql = "SELECT * FROM `rendez-vous` WHERE idp='$id'";
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
		$sql = "DELETE FROM `rendez-vous` WHERE id= '$id'";
		$db = config::getConnexion();
       
      
        try{
            $req=$db->query($sql);
      
    }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
	function modifierrdv($id,$dateti,$medecin,$etat)
      {
          
          $sql="UPDATE `rendez-vous` SET id= '$id', dateti= '$dateti' , idm= '$medecin' , etat= '$etat'   WHERE id='$id'";
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