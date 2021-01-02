<?PHP
	include "../../Controller/medecinC.php";

	$medecinC=new medecinC();
	
	if (isset($_GET["id"])){
		$medecinC->supprimerM($_GET["id"]);
		header('Location:liste_medecin.php');
	}

?>