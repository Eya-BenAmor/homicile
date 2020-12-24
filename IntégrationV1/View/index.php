<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homicile</title>

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
      <a class="navbar-brand" href="#"> <img src="../images/logo.png" alt="">Restez chez vous, c'est à nous de venir</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
        
         
      
      <?php
                                if (isset($_SESSION['unserId'])) {
                                  ?>
                                   <li class="nav-item active">
                                   <li>  <a class="nav-link" href='rendez-vous.php'> <?php echo "Bonjour, ".$_SESSION['unserLastname'].""; ?></a></li>
                                   </li>
                                   <?php
                                }else{
                                  ?>
                                   <li class="nav-item active">
                                   <li><a class="nav-link" href='connecter.php'>Se Connecter</a></li>
                                   </li>
                                     <?php
                                }
                                ?>
                              
                             
                    
          <li class="nav-item">
            <a class="nav-link" href="s'enregistrer.php">S'enregistrer</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacie</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('http://localhost/projetV0/images/acc1.png');" >
    <img class="img-fluid d-block mx-auto" src="../images/v1.png" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Bienvenue dans votre hôpital à domicile</h1>
      <p class="lead">Homicile c'est la meilleure solution pour gérer autrement les rendez-vous et éviter La surcharge du secrétariat et les agendas multiples .</p>
      <p>Notre site diminue la charge sur les hôpitaux vu la situation sanitaire critique de l'état.
        Il nous aide à atténuer le contact entre patient et médecin et il est mis pour nous servir pendant cette période assez délicate.</p>
    </div>
  </section>

 

  

 
  <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Heures d'Ouverture</h2>

                        <ul class="p-0 m-0">
                            <li>Lundi - Jeudi <span>7.00 - 19.00</span></li>
                            <li>Vendredi <span>7.00 - 18.30</span></li>
                            <li>Samedi <span>8.00 - 17.00</span></li>
                            <li>Dimanche <span>8.00 - 15.00</span></li>
                        </ul>
                    </div>
                </div>
  
  <img src="http://localhost/BenAmor_Eya/images/depositphotos_1525631-stock-photo-successful-female-doctor.jpg" width="450"
         height="450">




                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Urgence</h2>

                        

                        <p>Nos services d'Urgences sont disponibles 24/7</p>
                    </div>

            </div>
        </div>
    </div>

<footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>
                            <p class="copyright">Esprit 2020-2021 </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contactez-Nous</h2>

                            <ul class="p-0 m-0">
                                <li><span>Addresse:</span>Ariana </li>
                                <li><span>Phone:</span>+212 527 778 8892</li>
                                <li><span>Email:</span>homicile@gmail.com</li>
                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Liens</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="login.html">Se Connecter</a></li>
                                <li><a href="index.html">S'enregistrer</a></li>
                                <li><a href="index.html">Pharmacie</a></li>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <?php
                                if (isset($_SESSION['unserId'])) {
                                    echo '<form action="déconnecter.php" method = "post">
                                    <button class="call-btn" type="submit" name="logout-submit" > Deconnexion</button>
                                </form>';
                                }
                                ?>


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
