<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon Historique</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="imprimer.css" type="text/css" media="print" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/789300fde0.js" crossorigin="anonymous"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_profil.css">
    <script src="../js/custom.js"></script>



</head>
<body style="background-image: url('https://www.qare.fr/wp-content/uploads/2020/02/GettyImages-885764252-1.jpg');">  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <li ><a href="coordonnees_patient.php"><span class="fa fa-user"></span> Profile</a></li> 
                        <li><a href="espace_patient.php"><span class="fa fa-clock-o"></span> Avoir rendez-vous</a></li>
                        <li class="active"><a href="historique_patient.php"><span class="fas fa-history"></span>Ordonnance en ligne</a></li>
                        <li><a href="liste_RDV.php"><span class="fas fa-house-user"></span> Rendez-vous en cours..</a></li>
                    </ul>
                    <form class="form-horizontal" action="déconnecter.php" method = "post">
                      <button class="btn btn-primary" style="margin-left: 14%; margin-top: 10%;"><span class="fa fa-user"></span> Déconnexion</button>
                    </form>
                    </nav>
                </div>
                <div class="content-panel">
                    <h2 class="title">Ordonnance <span class="pro-label label label-warning"></span></h2>
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title"> Ici vous trouvez votre ordonnance en ligne avec la possibilité de l'imprimer !</h3>
                            <div class="form-group avatar" style='width: 700px;'>
     

<?php

                             
                                
                                          $i = 1;
                                       
                                          $remarque = "";
                                          include_once '../config.php';
                                          $sql = "SELECT * FROM `rendez-vous` WHERE idp=".$_SESSION['unserId'];
                                          $db = config::getConnexion();
                                              try {
                                                  $liste = $db->query($sql);
                                                  
                                  
                                    foreach ($liste as $row) {
                                     
                                      $idr = $row['id'];
                                      $dater = $row['dateti'];
                                      $etat = $row['etat'];
                                    $sql2 = "SELECT * FROM `medecin` WHERE id=".$row["idm"];
                                     
                                        $db = config::getConnexion();
                                        try {
                                            $liste2 = $db->query($sql2);

                                    foreach ($liste2 as $row_m) {
                                     
                                      $nomM = $row_m['nom'];
                                      $preM = $row_m['prenom'];
                                     
                                      $sql3 = "SELECT * FROM `ordonnance` WHERE idr=".$idr;
                                      $db = config::getConnexion();
                                      try {
                                          $liste3 = $db->query($sql3);
                                    foreach ($liste3 as $row_o) {
                                        $med1 = $row_o['medicament1'];
                                        $med2 = $row_o['medicament2'];
                                        $med3 = $row_o['medicament3'];
                                        $nfj1 = $row_o['nfj1'];
                                        $nfj2 = $row_o['nfj2'];
                                        $nfj3 = $row_o['nfj3'];
                                        $avap1 = $row_o['avap1'];
                                        $avap2 = $row_o['avap2'];
                                        $avap3 = $row_o['avap3'];
                                      
                                          
                                         
                                          
                                          echo '<ol><li>' .$med1. "  "."<br>". $nfj1 ." fois par jour<br>".$avap1.'</li>';
                                          echo '<li>'.$med2. "  " ."<br>". $nfj2 ." fois par jour<br>".$avap2.'</li>';
                                          echo '<li>'.$med3. "  " ."<br>". $nfj3 ." fois par jour<br>".$avap3.'</li>';
                                          
                                          echo '</ol></tr>';
                                          
                                        
                                      }
                                    } catch (Exception $e) {
                                      die('Erreur: ' . $e->getMessage());
                                    }
                                  }
                                }catch (Exception $e) {
                                  die('Erreur: ' . $e->getMessage());
                                }
                                     
                                      }
                                  }catch (Exception $e) {
                                    die('Erreur: ' . $e->getMessage());
                                  }
                                
                                ?>
                                    <button onclick="myFunction()">imprimer l'ordonnance</button>
                            </table>
            </fieldset>
            <hr>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
function myFunction() {
    window.print();
}
</script>

</section>
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>

</html>
