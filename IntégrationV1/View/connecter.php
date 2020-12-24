<?php
include_once '../Model/enregistrer.php';
include_once '../Controller/connecterC.php';
session_start();
$error = "";


$connect = null;

$connectC = new connectC();
if (isset($_POST['login-submit'])) {
   

   $email = $_POST["email"];
   $psw = $_POST["password"];
   $G = $_POST["Genre"];

   if (empty($email) || empty($psw) || empty($G) ) {
       header("Location: ../connecter.php?error=emtyfields&email=".$email);
       exit();
   }
   else{
    if($G == "Patient"){
      
      $liste = $connectC->connect($email);
      foreach ($liste as $row) {
          

        if ($psw !== $row['mdp']) {//if the password is wrong
            header("Location: ../connecter.php?error=wrongpassword");
            exit();
        }elseif($psw == $row['mdp']){
           
            $_SESSION['unserId'] = $row['id'];
            $_SESSION['unserLastname'] = $row['nom'];
            $_SESSION['unserFirstname'] = $row['prenom'];
            $_SESSION['unserEmail'] = $row['email'];
            $_SESSION['unserBirth'] = $row['datenaissance'];
            $_SESSION['unserGender'] = $row['genre'];
          

            header("Location: ../View/index.php?login=success");
            exit();

        }else{//if the password is wrong
            header("Location: ../connecter.php?error=wrongpassword");
            exit();
        }
    }
   
   
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Connexion</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/full-width-pics.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="../css/swiper.min.css">

<!-- Styles -->
<link rel="stylesheet" href="../css/style3.css">

<script src="../js/custom.js"></script>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" ><img src="../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php"> Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rendez-vous.php">Se Connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="s'enregistrer.php">S'enregistrer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacie</a>
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="py-5">
    
   
   <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                <form class="form-horizontal" action="" role="form" method="post">
        <h2>Connectez-vous</h2>
        
        <div class="form-group">
            <div class="col-sm-12">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email" >
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-12">
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" >   
            </div>    
        </div>
        <div class="form-group">
            <div class="col-sm-12">
            <select  class="form-control" id="Genre" name="Genre" style="height: 30px ! important;">
                <option value="Médecin">Médecin</option>
                <option value="Patient">Patient</option>
            </select>
            </div>
        </div>
        <a href="signup.php" style="text-align: center;">Vous n'avez pas un compte?</a>
        
        <button type="submit" name="login-submit" >Connexion</button>
    </form> 
    </div>
    </div>
    </div>
    </div>
    </section> 
  
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>