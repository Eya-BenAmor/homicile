<?php
	include_once "../config.php";
	class MaladieC 
	{
		function getAllMaladie() {
			$sql ="select * from maladie";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function supprimerMaladie($id) {
			$db = config::getConnexion();
			try {
				$req = $db->prepare("delete from maladie where id=:id");
				$req->bindValue(":id",$id);
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function ajouterMaladie($maladie) {
			$sql = "insert into maladie (nom, description) values (:nom, :description)";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':nom',$maladie->getNom());
				$req->bindValue(':description',$maladie->getDescription());
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function getMaladie($id) {
			$sql ="select * from maladie where id='".$id."'";
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

		function modifierMaladie($maladie) {
			$sql = "update maladie set nom = :nom, description = :description where id='".$maladie->getId()."'";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':nom',$maladie->getNom());
				$req->bindValue(':description',$maladie->getDescription());
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}
	}
?>