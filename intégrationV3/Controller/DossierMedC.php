<?php
	include_once "../config.php";
	class DossierMedC 
	{
		function getAllDossierMed() {
			$sql ="select * from dossiermed";
			$db = config::getConnexion();
			try {
				return $db->query($sql);
			} catch (Exception $e) {
				die("Erreur: ".$e->getMessage());
			}
		}

		function supprimerDossierMed($id) {
			$db = config::getConnexion();
			try {
				$req = $db->prepare("delete from dossiermed where id=:id");
				$req->bindValue(":id",$id);
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function ajouterDossierMed($dm) {
			$sql = "insert into dossiermed (maladie_id, patient_id, titre, fichier_pdf, description) values (:maladie_id, :patient_id, :titre, :fichier_pdf, :description)";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':maladie_id',$dm->getMaladie_id());
				$req->bindValue(':patient_id',$dm->getPatient_id());
				$req->bindValue(':titre',$dm->getTitre());
				$req->bindValue(':fichier_pdf',$dm->getFicher_PDF());
				$req->bindValue(':description',$dm->getDescription());
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}

		function getDossierMed($id) {
			$sql ="select * from dossiermed where id='".$id."'";
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

		function modifierDossierMed($dm) {
			$sql = "update dossiermed set maladie_id = :maladie_id, patient_id = :patient_id, titre = :titre, fichier_pdf = :fichier_pdf, description = :description where id='".$dm->getId()."'";
			$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->bindValue(':maladie_id',$dm->getMaladie_id());
				$req->bindValue(':patient_id',$dm->getPatient_id());
				$req->bindValue(':titre',$dm->getTitre());
				$req->bindValue(':fichier_pdf',$dm->getFicher_PDF());
				$req->bindValue(':description',$dm->getDescription());
				$req->execute();
			} catch (Exception $e) {
				die("Erreur :".$e->getMessage());
			}
		}
	}
?>