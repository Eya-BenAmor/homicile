<?PHP
	include "../../Controller/ordonnanceC.php";

	$ordonnanceC=new ordonnanceC();
	
	if (isset($_GET["id"])){
		$ordonnanceC->supprimerordonnance($_GET["id"]);
		header('Location:liste.php');
	}

?>