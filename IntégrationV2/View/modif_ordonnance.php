<?php
require "../Controller/ordonnanceC.php";
include_once '../Model/ordonnance.php';

$ordonnanceC=new ordonnanceC();
$id=$_GET["id"];



if(isset($_POST["Médicament1"])&& isset($_POST["fpj1"])&& isset($_POST["avap1"]) && isset($_POST["Médicament2"])&& isset($_POST["fpj2"])&& isset($_POST["avap2"]) && isset($_POST["Médicament3"])&& isset($_POST["fpj3"])&& isset($_POST["avap3"])&& isset($_POST["remarque"]))
	{
		
	
			
		$ordonnanceC->modifierordonnance($id,$_POST["Médicament1"],$_POST["fpj1"],$_POST["avap1"],$_POST["Médicament2"],$_POST["fpj2"],$_POST["avap2"],$_POST["Médicament3"],$_POST["fpj3"],$_POST["avap3"],$_POST["remarque"]);
		header("location:liste.php");
	}
else
	{ 
	echo "Erreur";
	}

?>
