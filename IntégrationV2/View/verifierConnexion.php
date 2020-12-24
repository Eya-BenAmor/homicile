<?php
include_once '../Model/patient.php';
include_once '../Controller/connecterC.php';
session_start();





$connectC = new connectC();
if (isset($_POST['login-submit'])) {
   

   $email = $_POST["email"];
   $psw = $_POST["password"];
   $G = $_POST["Genre"];

   if (empty($email) || empty($psw) || empty($G) ) {
       header("Location:connecter.php?error=emtyfields&email=".$email);
       exit();
   }
   else{
    if($G == "Patient"){
      
      $liste = $connectC->connect($email);
      foreach ($liste as $row) {
          

        if ($psw !== $row['mdp']) {//if the password is wrong
            header("Location:connecter.php?error=wrongpassword");
            exit();
        }elseif($psw == $row['mdp']){
           
            $_SESSION['unserId'] = $row['id'];
            $_SESSION['unserLastname'] = $row['nom'];
            $_SESSION['unserFirstname'] = $row['prenom'];
            $_SESSION['unserEmail'] = $row['email'];
            $_SESSION['unserBirth'] = $row['Datenaissance'];
            $_SESSION['unserGender'] = $row['genre'];
            $_SESSION['unserTel'] = $row['Tel'];
            $_SESSION['unserS'] = $row['GroupS'];


            header("Location:index.php?login=success");
            exit();

        }else{//if the password is wrong
            header("Location:connecter.php?error=wrongpassword");
            exit();
        }
    }
   
   
    }
   
          elseif ($G == "Médecin") {
            $liste = $connectC->connectM($email);
           
                
          foreach ($liste as $row) {
  
                      if ($psw !== $row['mdpM']) {//if the password is wrong
                          header("Location:connecter.php?error=wrongpassword");
                          exit();
                      }elseif($psw == $row['mdpM']){
                          session_start();
                          $_SESSION['DId'] = $row['id'];
                          $_SESSION['DLastname'] = $row['nom'];
                          $_SESSION['DFirstname'] = $row['prenom'];
                          $_SESSION['DEmail'] = $row['email'];
                          $_SESSION['Dspecialite'] = $row['specialite'];
                          $_SESSION['Dtel'] = $row['tel'];
  
                          header("Location:archive_medecin.php?login=success");
                          exit();
  
                      }else{//if the password is wrong
                          header("Location:connecter.php?error=wrongpassword2");
                          exit();
                      }
                  }
          }
      }
  }else {
    header("Location: connecter.php");
    exit();
}

?>