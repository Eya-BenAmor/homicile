<?PHP
	include "../Controller/rdvC.php";

	$rdvC=new rdvC();
	
	if (isset($_GET["id"])){
		$rdvC->supprimerrdv($_GET["id"]);
		header('Location:liste_RDV.php');
	}

?>