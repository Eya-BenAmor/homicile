<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>profile</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_profil.css">
    <script src="..js/custom.js"></script>
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
                  <li class="active"><a href="coordonnees_patient.php"><span class="fa fa-user"></span> Profile</a></li> 
                  <li><a href="espace_patient.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                  <li><a href="historique_patient.php"><span class="fas fa-history"></span> Rendez_vous passés</a></li>
                  <li><a href="liste_RDV.php"><span class="fas fa-house-user"></span> Rendez-vous en cours..</a></li>
                </ul>
                <form class="form-horizontal" action="déconnecter.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                </form>
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Profile<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="" method = "post">
                        <fieldset class="fieldset">
                        <?php
                            if (isset($_SESSION['unserId'])) {
                                echo "<h3>".$_SESSION['unserLastname']." ". $_SESSION['unserFirstname']."</h3>";
                                echo "</fieldset><hr>";
                                echo "<h5>Email : ".$_SESSION['unserEmail']. "  </h5><br>";
                                echo "<h5>Date de naissance : ".$_SESSION['unserBirth']. "  </h5><br>";
                                echo "<h5>Genre : ".$_SESSION['unserGender']. " </h5><br>";
                                if ($_SESSION['unserTel'] !== 0) {
                                    echo "<h5>Tel : ".$_SESSION['unserTel']. " </h5><br>";
                                }
                                if ($_SESSION['unserS']) {
                                    echo "<h5>Groupe Sangin : ".$_SESSION['unserS']. " </h5><br>";
                                }
                                if ($_SESSION['unserTel'] && $_SESSION['unserS']) {
                                   
                                    echo "<a href='profil_patient_mod.php' style='text-decoration-line: underline;'>Modifier mon profile <i class='fas fa-user-edit'></i></a>";
                                }
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
