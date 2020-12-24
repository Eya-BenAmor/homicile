<?php
include "../config.php";
require_once '../Model/rdv.php';
class rdvC
{

	function ajouterrdv($rdv)
	{
        
    $sql = "INSERT INTO  `rendez-vous`(`dateti`,`idm`,`idp`) VALUES(?,?,?);";

   	$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				
                'date' => $rdv->dateti,
                			'idm' => $rdv->idm,
				'idp' => $rdv->idp
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
}
}
?>