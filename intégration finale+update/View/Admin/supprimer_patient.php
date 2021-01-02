<?PHP
	include "../../Controller/patientC.php";

	$patientC=new patientC();
	
	if (isset($_GET["id"])){
		$patientC->supprimerP($_GET["id"]);
		header('Location:liste_patient.php');
	}

?>