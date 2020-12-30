<?php
include_once '../../Model/patient.php';
include_once '../../Controller/connecterC.php';





$connectC = new connectC();
if (isset($_POST['login-submit'])) {
   

   $email = $_POST["email"];
   $psw = $_POST["password"];
  
   $liste = $connectC->connectadmin($email);
   if (empty($email) || empty($psw) ) {
       header("Location:page-login.php?error=emtyfields&email=".$email);
       exit();
   }
        
           
     else{           
          foreach ($liste as $row) {
  
                      if ($psw !== $row['mdp']) {//if the password is wrong
                          header("Location:page-login.php?error=wrongpassword");
                          exit();
                      }else{
                         
  
                          header("Location:indexadmin.php?login=success");
                          exit();
  
                    
                  }
          }
        }   
  }else {
    header("Location:page-login.php");
    exit();
}

?>