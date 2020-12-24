<?php
include_once '../Model/rdv.php';
include_once '../Controller/rdvC.php';
session_start();


$rdv = null;

$rdvC = new rdvC();
if(empty($_POST['etat']))
{
    header("Location:liste_RDV.php?error=etatmanquant");
}

if (isset($_POST['submit-rdv'])) {
    

   
$rdv = new rdv(
    $_POST['time'],$_POST['medecin'],$_SESSION['unserId'],$_POST['etat']
    
);
$rdvC->ajouterrdv($rdv);
header("Location:liste_RDV.php");
}
    ?>