<?PHP
	include "../Controller/rdvC.php";

	$rdvC=new rdvC();
	
	if (isset($_POST["id"])){
		$rdvC->Supprimerrdv($_POST["id"]);
		header('Location:liste_RDV.php');
	}

?>