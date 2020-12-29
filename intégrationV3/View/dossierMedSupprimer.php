<?php 
	include "../Controller/DossierMedC.php";

	if( isset($_GET) and isset($_GET['id']) ) {
		$dmC = new DossierMedC();
		$dmC->supprimerDossierMed($_GET['id']);
	}
	header("Location:dossierMedAfficher.php");

 ?>