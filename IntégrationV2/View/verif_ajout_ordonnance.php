<?php

include_once '../Model/ordonnance.php';
include_once '../Controller/ordonnanceC.php';
include_once '../Model/patient.php';
include_once '../Controller/patientC.php';
include_once '../Model/rdv.php';
include_once '../Controller/rdvC.php';
session_start();

$ordonnance = null;

$ordonnanceC = new ordonnanceC();
$rdvC = new rdvC();
$patientC = new patientC();
if (isset($_POST['submit-ordonnance'])) {
    

   
    if (empty($_POST['Médicament1']) ||empty($_POST['fpj1'])||empty($_POST['avap1']) ||empty($_POST['remarque'])){
        header("Location:ajouter_ordonnance.php?error empty fileds");
        exit();
    }
   else{
    $liste = $rdvC->afficherrdv($_SESSION['DId']);
           
                
    
        
        foreach ($liste as $row) {
            $idr = $row['id'];
            $liste2 = $patientC->afficherP($row["idp"]);
            
                                    foreach ($liste2 as $row_p) {
                    $idp = $row_p['id']; #id du patient
                }
            }
            
       
   




    

   
$ordonnance = new ordonnance(
    $idr,
  $_POST['Médicament1'],
 $_POST['fpj1'],
  $_POST['avap1'],

 $_POST['Médicament2'],
  $_POST['fpj2'],
    $_POST['avap2'],

    $_POST['Médicament3'],
     $_POST['fpj3'],
     $_POST['avap3'],
    $_POST['remarque']

    
);
$ordonnanceC->ajouterordonnance($ordonnance);
header("Location:archive_medecin.php?success");
}
}
   else {
    header("Location:/ajouter_ordonnance.php");
    exit();
}
?>