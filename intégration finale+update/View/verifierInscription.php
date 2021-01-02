<?php
   include_once '../Model/patient.php';
   include_once '../Controller/patientC.php'; 
   session_start();
   $patient = null;

   $patientC = new patientC();
if (isset($_POST['signup-submit'])) {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $pswR = $_POST["password-R"];
    $datenaissance = $_POST["dateNaissance"];
    $genre = $_POST["Genre"];
    $tel = $_POST["tel"];
    $groups = $_POST["groups"];

    if (empty($nom) || empty($prenom) || empty($email) || empty($psw) || empty($pswR) || empty($datenaissance) || empty($genre)) {
        header("Location:S'enregistrer.php?error=emtyfields&nom=".$nom."&prénom=".$prenom."&email=".$email);
        exit();
    }
   
  
    elseif ($_POST["password"]!==$_POST["password-R"]) {//check if the paswords matchs
        header("Location:S'enregistrer.php?error=invalidpassword&nom=".$nom);
        exit();
    }
    
    else {
        // to check if the email is already used
        $liste = $patientC->afficherP_email($_POST["email"]);
       $num= $liste-> rowCount();
      
            if($num>0)
            {
                header("Location:S'enregistrer.php?error=emailused");
            
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
        header("Location:connecter.php?success");
        }
    
    }

}else{
    header("Location:S'enregistrer.php");
    exit();
}
?>