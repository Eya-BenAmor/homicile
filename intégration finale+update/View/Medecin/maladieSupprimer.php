<?php 
	 include "../../Controller/MaladieC.php";
	 include "../../Model/Maladie.php";
	if( isset($_GET) and isset($_GET['id']) ) {
		$mc = new MaladieC();
		$mc->supprimerMaladie($_GET['id']);
	}
	header("Location:MaladieAfficher.php");

 ?>