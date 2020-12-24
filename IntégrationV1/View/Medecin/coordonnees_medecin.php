<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medecin</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../../css/swiper.min.css">
    <link rel="icon" type="image/png" href="../../Table_style/images/icons/favicon.ico"/>
    <!-- Styles -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_profil.css">
    <script src="../../js/custom.js"></script>
</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" ><img src="../../images/logo.png" alt="">Restez chez vous, c'est à nous de venir  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="../index.php"> Accueil</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacie</a>
            </li>
            <li class="nav-item">
         
            <a class="nav-link" href="../déconnecter.php">Déconnecter</a>
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
                  	<img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRU_tRT57Pq_fe8VZ0ef9ZdTp8iVqRryxhj3luucZ2EdeHZlDDh&usqp=CAU" class="rounded-circle" width="180" height="200" >
                        <ul class="meta list list-unstyled">
                        <ul class="meta list list-unstyled">
                        <?php
                            echo '<li class="name">'.$_SESSION['DLastname']." " .$_SESSION['DFirstname'].'</li>';
                            echo '<li class="name"> spécialité:' .$_SESSION['Dspecialite'].'</li>';
                            ?>
                        </ul>
                    </div>
                <nav class="side-menu">
                <ul class="nav">
                <li class="active"><a href="coordonnees_medecin.php"><span class="fa fa-user"></span>Profil</a></li> 
                <li ><a href="agenda.php">Votre Agenda</a></li> 
                        <li ><a href="archive_medecin"> Liste de rendez-vous</a></li> 
                        <li ><a href="liste.php">Liste des ordonnances</a></li>
                        <li ><a href="maladieAfficher.php">Les maladies</a></li> 
                        <li ><a href="dossierMedAfficher.php">Dossiers médicaux</a></li>
                </ul>
                
              </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Profile<span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal" action="" method = "post">
                        <fieldset class="fieldset">
                        <?php
                            if (isset($_SESSION['DId'])) {
                                echo "<h3>".$_SESSION['DLastname']." ". $_SESSION['DFirstname']."</h3>";
                                echo '<li class="name"> spécialité:' .$_SESSION['Dspecialite'].'</li>';
                                echo "</fieldset><hr>";
                                echo "<h5>Email : ".$_SESSION['DEmail']. "  </h5><br>";
                               
                                if ($_SESSION['Dtel'] !== 0) {
                                    echo "<h5>Tel : ".$_SESSION['Dtel']. " </h5><br>";
                                }
                                
                                if ($_SESSION['Dtel'] ) {
                                   
                                    echo "<a href='profil_medecin_mod.php' style='text-decoration-line: underline;'>Modifier mon profile <i class='fas fa-user-edit'></i></a>";
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
<script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>

</html>
