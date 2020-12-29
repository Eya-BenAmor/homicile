<?php
require "../Controller/rdvC.php";
include_once '../Model/rdv.php';

$rdvC=new rdvC();
$id=$_GET["id"];



if(isset($_POST["time"])&& isset($_POST["medecin"])&& isset($_POST["etat"]))
	{
		
		$date=$_POST["time"];
    $specialite=$_POST["medecin"];
    $type=$_POST["etat"];
			
		$rdvC->modifierrdv($id,$date,$specialite,$type);
		header("location:liste_RDV.php");
	}
else
	{ 
	echo "Erreur";
	}

?>
