<?php
   include_once '../../Model/patient.php';
   include_once '../../Controller/patientC.php'; 
  
   $patient = null;

   $patientC = new patientC();
if (isset($_POST['signup-submit'])) {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
  
    $datenaissance = $_POST["dateNaissance"];
    $genre = $_POST["Genre"];
    $tel = $_POST["tel"];
    $groups = $_POST["groups"];

    if (empty($nom) || empty($prenom) || empty($email) || empty($psw) || empty($datenaissance) || empty($genre)) {
        header("Location:ajouter_patient.php?error=emtyfields&nom=".$nom."&prénom=".$prenom."&email=".$email);
        exit();
    }
   
  
    
    else {
        // to check if the email is already used
        $liste = $patientC->afficherP_email($_POST["email"]);
       $num= $liste-> rowCount();
      
            if($num>0)
            {
                header("Location:ajouter_patient.php?error=emailused");
            
            }
    else{
        
        $patient = new patient(
            $_POST["nom"],
            $_POST["prénom"],
            $_POST["email"],
            $_POST["password"],
            $_POST["dateNaissance"],
            $_POST["Genre"],
            $_POST["tel"],
            $_POST["groups"]
        );
        $patientC->ajouterP($patient);
        header("Location:indexadmin.php?success");
        }
    
    }

}else{
    header("Location:ajouter_patient.php");
    exit();
}
?>