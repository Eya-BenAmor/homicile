<?php
   include_once '../../Model/medecin.php';
   include_once '../../Controller/medecinC.php'; 
  
   $medecin = null;

   $medecinC = new medecinC();
if (isset($_POST['ajouter'])) {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $email = $_POST["email"];
    $psw = $_POST["password"];
  
    
    $specialite = $_POST["specialite"];
    $tel = $_POST["tel"];
  

    if (empty($nom) || empty($prenom) || empty($email) || empty($psw)  || empty($specialite) || empty($tel)) {
        header("Location:ajouter_medecin.php?error=emtyfields&nom=".$nom."&prénom=".$prenom."&email=".$email);
        exit();
    }
   
  
    
    else {
        
        $medecin = new medecin(
            $_POST["nom"],
            $_POST["prénom"],
            $_POST["email"],
            $_POST["password"],
            $_POST["specialite"],
          
            $_POST["tel"]
           
        );
        $medecinC->ajouterM($medecin);
        header("Location:indexadmin.php?success");
        }
    
    

}else{
    header("Location:ajouter_medecin.php");
    exit();
}
?>