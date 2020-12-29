<?php


session_start();
include_once "../Controller/patientC.php";



if (isset($_POST['profile-mod-submit'])) {
  
    $patientC=new patientC();
    
    $_SESSION['unserEmail']=$_POST['email'];
    $_SESSION['unserBirth']=$_POST['datenaissance'];
    $_SESSION['unserGender']=$_POST['genre'];
    $_SESSION['unserTel']=$_POST["tel"];
    $_SESSION['unserS']=$_POST["GroupS"];
    $patientC->modifierP2($_SESSION['unserId'],$_SESSION['unserTel'],$_SESSION['unserS'],$_SESSION['unserBirth'],$_SESSION['unserEmail'],$_SESSION['unserGender']);
    header("Location:coordonnees_patient.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>profile - Modification</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_profil.css">
    <script src="js/custom.js"></script>
</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">
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
            <a class="nav-link" href="#">Pharmacie</a>
            </li>
            <li class="nav-item">
         
            <a class="nav-link" href="déconnecter.php">Déconnecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="py-5">

<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div class="user-info">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRj0sVdHUILZRoIEPpZsqFqaxKUU1KPE45kn2LcjB6WmcElCf-C&usqp=CAU" class="rounded-circle" alt="Avatar" style="width:150px">
                        <ul class="meta list list-unstyled">
                        <ul class="meta list list-unstyled">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo '<li class="name">'.$_SESSION['unserLastname'].' '. $_SESSION['unserFirstname'].'</li>';
                            }
                        ?>
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                  <li class="active"><a href="profil_patient.php"><span class="fa fa-user"></span> Modifier votre profile</a></li> 
                  <li><a href="espace_patient.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                  <li><a href="historique_patient.php"><span class="fas fa-history"></span> Rendez-vous passés</a></li>
                  <li><a href="liste_RDV.php"><span class="fas fa-house-user"></span> Rendez-vous en cours..</a></li>
                </ul>
                <form class="form-horizontal" action="Déconnecter.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                </form>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Modifier votre profile (touts les champs sont obligatoires.)<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="" method = "post">
                        <fieldset class="fieldset">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo "<h3>".$_SESSION['unserLastname']." ". $_SESSION['unserFirstname']."</h3>";
                                echo "</fieldset><hr>";
                                echo "<h5>Email : ".$_SESSION['unserEmail']. "  </h5><input type='text'  placeholder='Nouvelle adresse email...' class='form-control' style='width: 500px;' name='email' required> <br>";
                                echo "<h5>Date de naissance : ".$_SESSION['unserBirth']. "  </h5><input type='date'  placeholder='Date de naissance...' class='form-control' style='width: 500px;' name='datenaissance' required ><br>";
                                echo "<h5>Genre : ".$_SESSION['unserGender']. " </h5><div class='form-group' required >
                                <select  class='form-control'  name='genre' style='width: 500px;'>
                                    <option value='Homme'>Homme</option>
                                    <option value='Femme'>Femme</option>
                                </select>
                            </div><br>";
                                
                                    echo "<h5>Tel : ".$_SESSION['unserTel']. " </h5><input type='text'  placeholder='Votre nouveau numéro...' class='form-control' style='width: 500px;' name='tel' required ><br>";
                            
                              
                                    echo "<h5>Groupe Sangin : ".$_SESSION['unserS']. " </h5><input type='text'  placeholder='Votre Group Sangin si connue...' style='width: 500px;' class='form-control' name='GroupS' required ><br>";
                               
                               
                                echo '<button type="submit" name="profile-mod-submit" class="btn btn-primary">Enregistrer les modification</button>';
                                
                            }else{
                                die("Erreur: Vous n'etes pas connecté.");
                            }
                            
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
</section>
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>
 
</html>
